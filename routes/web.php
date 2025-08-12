<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




      Route::get('/',function(){return view('welcome');})->name('dash');
      Route::get('/home', [ProductController::class,'allproducts'])->name('home');
      Route::get('/contact',function(){
      return view('wepsite.contact');
      })->name('contact');
      Route::get('/about',function(){
      return view('wepsite.about');
      })->name('about');
      
      Route::get('/allproduct',function(){
      return view('wepsite.product.product');
      })->name('product');
     
      
      Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
      Route::get('/cart', [CartController::class, 'index'])->name('cart');
      Route::post('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
      Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
      
      
      Route::post('/checkout', [OrderController::class, 'checkout'])->name('order.checkout');
      Route::get('/order', [OrderController::class, 'index'])->name('order');
            
            Route::get('/check_out',function(){
            return view('wepsite.product.check_out');
            })->name('check_out');




Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('admin')->prefix('/dashboard')->group(function(){

Route::get('/', function () {return view('dashboard');})->middleware(['auth', 'admin'])->name('dashboard');

Route::prefix('/admin')->name('admin.')->group(function(){
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
