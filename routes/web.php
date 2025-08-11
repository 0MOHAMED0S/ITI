<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('/dashboard')->group(function(){

Route::get('/', function () {return view('dashboard');})->middleware(['auth', 'admin'])->name('dashboard');

Route::prefix('/admin')->name('admin.')->group(function(){
Route::controller(ProductController::class)->name('product.')->group(function(){
   Route::get('/Product/','Products')->name('table_product');
   Route::get('/Product/create_product','create')->name('create');
   Route::post('/Product/create_product' ,'add')->name('add');
   Route::get('/Product/archive' ,'archive')->name('archive');

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
   Route::get('/Categorie/table_categorie','categorie')->name('table_categorie');
   Route::get('/Categorie/create_categorie','create')->name('create');
   Route::post('/Categorie/create_categorie' , 'add')->name('add_categorie');
   Route::get('/Categorie/archive' ,'archive')->name('archive');
   
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
