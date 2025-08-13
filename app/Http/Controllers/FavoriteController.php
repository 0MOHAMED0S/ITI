<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    // Add product to favorites
    public function add($id)
    {
        $product = Product::findOrFail($id);
        $exists = Favorite::where('product_id', $id)->where('user_id', Auth::id())->exists();

        if (!$exists) {
            Favorite::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id
            ]);
        }

        return back()->with('success', 'Added to favorites!');
    }

    // Show favorites
    public function index()
    {
        $favorites = Favorite::with('product')->where('user_id', Auth::id())->get();
        return view('wepsite.product.wishlist', compact('favorites'));
    }

    // Remove from favorites
    public function remove($id)
    {
        Favorite::where('id', $id)->where('user_id', Auth::id())->delete();
        return back()->with('success', 'Removed from favorites!');
    }
}