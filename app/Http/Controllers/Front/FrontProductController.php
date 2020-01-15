<?php

namespace App\Http\Controllers\Front;

use App\Cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class FrontProductController extends Controller
{
    public function index()
    {
        $product = Product::find( );
        return view('frontend.product',compact('product'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('frontend.product',compact('product'));
    }

    public function getAddToCart(Request $request,$id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect('product/'.$product->id);
    }

    public function getCart()
    {
        if (!Session::has('cart'))
        {
            return view('frontend.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('frontend.cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
