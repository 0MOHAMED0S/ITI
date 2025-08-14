<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    // Add product to cart
    public function add($id)
    {
        $product = Product::findOrFail($id);

        $cartItem = Cart::where('product_id', $id)
                        ->where('user_id', Auth::id())
                        ->first();

        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        return redirect()->back()->with('msg', 'Product added to cart!');
    }

    // Show cart
    public function index()
    {
        $cart = Cart::with('product')
                    ->where('user_id', Auth::id())
                    ->get();
        return view('wepsite.product.cart', compact('cart'));
    }

    // Remove item from cart
    public function remove($id)
    {
        Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->route('cart')->with('msg', 'Item removed from cart!');
    }

    // Update quantity
    public function update(Request $request, $id)
    {
        $request->validate(['quantity' => 'required|integer|min:1']);

        $cartItem = Cart::where('id', $id)
                        ->where('user_id', Auth::id())
                        ->firstOrFail();

        $cartItem->quantity = $request->quantity;
        $cartItem->save();

        return redirect()->route('cart')->with('msg', 'Cart updated!');
    }


    public function toggleCart($productId)
{
    $userId = auth()->id();

    $cartItem = Cart::where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->first();

    if ($cartItem) {
        $cartItem->delete();
        $message = 'Product removed from cart';
    } 
    else {
        Cart::create([
            'user_id' => $userId,
            'product_id' => $productId,
            'quantity' => 1
        ]);
        $message = 'Product added to cart';
    }

    return redirect()->back()->with('msg',$message);
}

}