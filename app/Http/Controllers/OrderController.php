<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function order()
    {
        $deliveryServices = Delivery::all();
        $newShop = new ShopController();
        $cartProducts = $newShop->getProducts();
        $totalAmount = 0;
        foreach ($cartProducts as $cartProduct){
           $totalPrice = (int)$cartProduct['quantity'] * (float)$cartProduct['price'];
            $totalAmount += $totalPrice;

        }
        return view('orderPage', compact('deliveryServices', 'totalAmount'));
    }
    public function checkout(Request $request)
    {
        $customers = Customer::all();
        $customerExists = false;
        foreach ($customers as $customer){
            if($customer->email === $request->email){
                $customerExists = true;
                break;
            }
        }
        if(!$customerExists){
            $customer = new Customer();
            $customer->email = $request->email;
            $customer->discount = 1;
            $customer->save();
        }
        else{
            $customer = Customer::where('email',$request->email)->first();
        }
        $order = new Order();
        $order->customer_id = $customer->id;
        $order->delivery_id = (int)$request->deliveryService;
        $order->firstName = $request->firstName;
        $order->lastName = $request->lastName;
        $order->mobile = $request->phone;
        $order->addressLine1 = $request->addressLine1;
        $order->addressLine2 = $request->addressLine2 ?? null;
        $order->total_price = (float)$request->total_price * $customer->discount;
        $order->save();
        $newShop = new ShopController();
        $cartProducts = $newShop->getProducts();

        foreach ($cartProducts as $cartProduct){
           $product = Product::find($cartProduct['id']);
           if($cartProduct['coffeeType'] === 'cold' || $cartProduct['coffeeType'] === 'hot'){
              $order->products()->attach($product, array('quantity' => $cartProduct['quantity'], 'coffeeType' => $cartProduct['coffeeType']));
           }
           else{
              $order->products()->attach($product, array('quantity' => $cartProduct['quantity']));
           }
          $order->save();
        }
        setcookie('product_records', '', time() - 3600, '/');
        return view('payForOrder', compact('order'));
    }

    public function pay(Request $request, Order $order)
    {
        $creditCards = CreditCard::all();
        $cardExists = false;
        foreach($creditCards as $card){
            if($card->cardsNumbers == $request->cardsNumbers){
                $cardExists = true;
                break;
            }
        }
        if(!$cardExists){
            $creditCard = new CreditCard();
            $creditCard->customer_id = $order->customer_id;
            $creditCard->ownerFirstName = $request->ownerFirstName;
            $creditCard->ownerLastName = $request->ownerLastName;
            $creditCard->cardsNumbers = (int)$request->cardsNumbers;
            $creditCard->expirationDate = $request->expirationDate;
            $creditCard->cvv = (int)$request->cvv;
            $creditCard->save();
        }
            $order->status = 'paid';
              $order->save();
              return redirect()->route('home');
    }

    public function cancel(Order $order)
    {
        $order->status = 'canceled';
        $order->save();
        return redirect()->route('home');
    }

    public function subscribe(Request $request)
    {
        $customers = Customer::all();
        $customerExists = false;
        foreach ($customers as $customer){
            if($customer->email === $request->email){
                $customerExists = true;
                break;
            }
        }
        if(!$customerExists){
            $customer = new Customer();
            $customer->email = $request->email;
            $customer->discount = 0.5;
        }
        else{
            $customer = Customer::where('email',$request->email)->first();
            $customer->discount = 0.5;
        }
        $customer->save();
        return Redirect::back();
    }
}
