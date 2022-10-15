<?php

namespace App\Http\Controllers;

use App\Models\CreditCard;
use App\Models\User;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        try {
            DB::beginTransaction();
            $order = new Order();
            $order->user_id = $request->user()->id;
            $order->delivery_id = (int)$request->deliveryService;
            $order->firstName = $request->firstName;
            $order->lastName = $request->lastName;
            $order->mobile = $request->phone;
            $order->addressLine1 = $request->addressLine1;
            $order->addressLine2 = $request->addressLine2 ?? null;
            if ($request->user()->discount) {
                $order->total_price = (float)$request->total_price * $request->user()->discount;
            } else {
                $order->total_price = (float)$request->total_price;
            }
            $order->save();
            $newShop = new ShopController();
            $cartProducts = $newShop->getProducts();

            foreach ($cartProducts as $cartProduct) {
                $product = Product::find($cartProduct['id']);
                if ($cartProduct['coffeeType'] === 'cold' || $cartProduct['coffeeType'] === 'hot') {
                    $order->products()->attach($product, array('quantity' => $cartProduct['quantity'], 'coffeeType' => $cartProduct['coffeeType']));
                } else {
                    $order->products()->attach($product, array('quantity' => $cartProduct['quantity']));
                }
                $order->save();
            }
            DB::commit();
        }
        catch (\Exception $e){
            DB::rollBack();
            return $e->getMessage();
        }
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
            $creditCard->user_id = $order->user_id;
            $creditCard->ownerFirstName = $request->ownerFirstName;
            $creditCard->ownerLastName = $request->ownerLastName;
            $creditCard->cardsNumbers = (int)$request->cardsNumbers;
            $creditCard->expirationDate = $request->expirationDate;
            $creditCard->cvv = (int)$request->cvv;
            $creditCard->save();
        }
            $order->status = 'paid';
              $order->save();
        setcookie('product_records', '', time() - 3600, '/');
              return redirect()->route('home');
    }

    public function cancel(Order $order)
    {
        $order->status = 'canceled';
        $order->save();
        return redirect()->route('home');
    }
}
