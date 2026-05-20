<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;

        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        } else {
            $cart[$id] = [
                "name" => $request->name,
                "price" => $request->price,
                "qty" => 1,
                "image" => $request->image
            ];
        }

        session()->put('cart', $cart);

        // trigger auto open cart
        session()->flash('open_cart', true);

        return redirect()->back();

        return redirect()->back();
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }
}