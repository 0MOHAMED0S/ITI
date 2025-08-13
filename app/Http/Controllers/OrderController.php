<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    // Checkout and create order
    public function checkout()
    {
        $cart = Cart::with('product')->where('user_id', Auth::id())->get();

        if ($cart->isEmpty()) {
            return redirect()->route('cart')->with('error', 'Cart is empty');
        }

        $total = 0;
        foreach ($cart as $item) {
            $total += $item->product->price * $item->quantity;
        }

        // Create order
        Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'pending'
        ]);

        // Clear the cart
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('order')->with('success', 'Order placed successfully!');
    }

    // List all orders for the logged-in user
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('wepsite.product.order', compact('orders'));
    }
}