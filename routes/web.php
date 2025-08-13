<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




      Route::get('/',function(){return view('welcome');})->name('dash');
      Route::get('/home', [ProductController::class,'product_categorie'])->name('home');
      Route::get('/show/{id}', [ProductController::class,'details'])->name('show.p');
      Route::get('/allproduct', [ProductController::class,'allproduct'])->name('allproduct');
      Route::get('/categories/{id}', [CategorieController::class, 'details'])->name('categorie.details');

      Route::get('/contact',function(){
      return view('wepsite.contact');
      })->name('contact');

      Route::get('/about',function(){
      return view('wepsite.about');
      })->name('about');
      
      // Route::get('/allproduct',function(){
      // return view('wepsite.product.product');
      // })->name('product');
      Route::post('/favorites/add/{id}', [FavoriteController::class, 'add'])->name('favorites.add');
      Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');
      Route::delete('/favorites/remove/{id}', [FavoriteController::class, 'remove'])->name('favorites.remove');
      Route::post('/favorites/toggle/{id}', [FavoriteController::class, 'toggle'])->name('favorites.toggle')->middleware('auth');

      Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
      Route::get('/cart', [CartController::class, 'index'])->name('cart');
      Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
      Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
      Route::get('/cart/toggle/{productId}', [CartController::class, 'toggleCart'])->name('cart.toggle');
      
      Route::post('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
      Route::get('/order', [OrderController::class, 'index'])->name('order');
            
      // Route::get('/account',function(){
      // return view('wepsite.Account');
      // })->name('account');




   Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->prefix('/dashboard')->group(function(){

Route::get('/', function () {return view('dashboard');})->middleware(['auth', 'admin'])->name('dashboard');

Route::prefix('/admin')->name('admin.')->group(function(){

Route::get('orders', [OrderController::class, 'show'])->name('orders');
Route::delete('/admin/orders/{id}', [OrderController::class, 'destroy'])->name('destroy');

Route::controller(ProductController::class)->name('product.')->group(function(){
   Route::get('/product/','products')->name('table_product');
   Route::get('/product/create_product','create')->name('create');
   Route::post('/product/create_product' ,'add')->name('add');
   Route::get('/product/archive' ,'archive')->name('archive');

   Route::prefix('/table_produect')->group(function () {
      Route::get('/{id}/','show')->whereNumber('id')-> name ('show');
      Route::get('/{id}/edit','edit')->whereNumber('id')->name('edit');
      Route::put('/{id}/','update')->whereNumber('id')->name('update');
      Route::delete('/{id}/destroy','destroy' )->whereNumber('id')->name('delete');
      Route::delete('archive/{id}/destroy','forceDestroy' )->whereNumber('id')->name('forcedelete');
      Route::get('archive/{id}/restore','restore' )->whereNumber('id')->name('restore');
   });
});

Route::controller(CategorieController::class)->name('categorie.')->group(function(){
   Route::get('/categorie/table_categorie','categorie')->name('table_categorie');
   Route::get('/categorie/create_categorie','create')->name('create');
   Route::post('/categorie/create_categorie' , 'add')->name('add_categorie');
   Route::get('/categorie/archive' ,'archive')->name('archive');

   Route::prefix('table_categorie')->group(function () {
      Route::get('/{id}/','show')->whereNumber('id')->name('show');
      Route::get('/{id}/edit','edit')->whereNumber('id')->name('edit');
      Route::put('/{id}/updete','update')->whereNumber('id')->name('update');
      Route::delete('/{id}/destroy','destroy')->whereNumber('id')->name('delete');
      Route::delete('/archive/{id}/destroy','forceDestroy')->whereNumber('id')->name('forcedelete');
      Route::get('/archive/{id}/restore','restore')->whereNumber('id')->name('restore');
         });
      });
    });
    });





    
require __DIR__.'/auth.php';
