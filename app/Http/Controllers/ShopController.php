<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }
    public function menu(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();
        if($request->search){
            $products = Product::where('name', 'like', "{$request->search}%")->get();
            return view('menu', compact('products', 'categories'));
        }
        else{
            return view('menu', compact('products', 'categories'));
        }

    }

    public function filter(Request $request){
        $categories = Category::all();
        $products = Category::where('name', $request->category)->first()->products()->get();
        return view('menu', compact('products', 'categories'));
    }


     public function saveProducts(array $products)
     {
        return  setcookie('product_records', json_encode($products), 2147483647, '/');
     }

    public function getProducts()
    {
        if(!isset($_COOKIE['product_records']))
        {
            return  [];
        }
        else{
            return  json_decode($_COOKIE['product_records'], true);
        }
    }
    public function addToCart(Product $product)
    {
        $products = $this->getProducts();
        $productExist = false;
        foreach($products as $cartsProduct){
           if($cartsProduct['id'] == $product->id && $cartsProduct['coffeeType'] == $_POST["{$product->id}hot_or_cold"]){
               $productExist = true;
               break;
           }
        }
        if($productExist === true){
            $products = $this->getProducts();
            foreach ($products as $index => $cartsProduct)
            {
                if($cartsProduct['id'] == $product->id && $cartsProduct['coffeeType'] == $_POST["{$product->id}hot_or_cold"] ?? '')
                {

                    $productCount = (int)($products[$index]['quantity']);
                    $productCount ++;
                    $products[$index]['quantity'] =(string)$productCount;
                }
            }
            $this->saveProducts($products);
        }
        else{
            $products[] = [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'image' => $product->image,
                'status' => $product->status,
                'coffeeType' => $_POST["{$product->id}hot_or_cold"] ?? '',
                'quantity' => '1',
            ];

            $this->saveProducts($products);
        }

            return Redirect::back();
    }

    public function showCart()
    {
        $products = $this->getProducts();
        return view('showCart', compact('products'));
    }

    public function deleteFromCart($productId, $coffeeType = null)
    {
        $products = $this->getProducts();
        foreach ($products as $index => $product)
        {
            if($product['id'] == $productId && $product['coffeeType'] == $coffeeType)
            {
                unset($products[$index]);
            }
        }

        if(count($products))
        {
            $this->saveProducts($products);
        }
        else
        {
            setcookie('product_records', '', time() - 3600, '/');
        }
        return Redirect::back();
    }


    public function confirmQuantity($productId, $coffeeType = '')
    {
        $products = $this->getProducts();
        foreach ($products as $index => $product)
        {

            if($product['id'] == $productId && $product['coffeeType'] == $coffeeType)
            {
                $products[$index]['quantity'] = $_POST["quantity"];

            }
        }
        $this->saveProducts($products);
        return Redirect::back();
    }

}
