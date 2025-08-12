<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;

class ProductController extends Controller
{
    
    public function Products(){
        $Products = Product::get();
        return view('dashboard.product.allproduct',compact('Products'));
    }  
    public function allproducts(){
        $Products = Product::get();
        return view('wepsite.index',compact('Products'));
    }  



    public function show($id){
        $Product = Product::findOrFail($id);
        return view('dashboard.product.product_actions.details',compact('Product')); 
    }
    
    
    public function create(){
        $Categories = Categorie::get();
        return view('dashboard.product.addproduct',compact('Categories'));
        
    }
    
    public function add(ProductRequest $Request ){

    $data =$Request->validated();
    if($Request->hasFile('image')){
        $file=$Request->file('image');
        $filename =time()."_". $file->getClientOriginalName();
        $file->storeAs('Product',$filename,'public');
    }
    $data['image']=$filename;
    Product::create($data);
    return redirect()->back()->with('msg','Add Product is Success');
}



public function edit($id){
    $Product = Product::findOrFail($id);
    $Categories = Categorie::get();
    return view('dashboard.product.product_actions.edit',compact('Product','Categories'));
    
}


public function update($id,Request $r){
    $Product = Product::findOrFail($id);
        $Product -> update($r->all());
        return redirect()->route('admin.product.table_product')->with('msg','Update Product is Success');
    }
    
    public function destroy($id){
        $Product = Product::findOrFail($id);
        $Product -> delete();
        return redirect()->route('admin.product.table_product')->with('msg','Delete Product is Success');
   }
   
    public function forceDestroy($id){
        $Product = Product::withTrashed()->findOrFail($id);
        $Product ->forceDelete();
        return redirect()->route('admin.product.archive')->with('msg','Delete Product is Success');
    }
    
    public function archive(){
        $Products = Product::onlyTrashed()->get();
        return view('dashboard.product.archive',compact('Products'));
    }
    
    public function restore($id){
        $Products = Product::withTrashed()->findOrFail($id);
        $Products -> restore();
        return redirect()->route('admin.product.archive')->with('msg','Restore Product is Success');
    }

}
