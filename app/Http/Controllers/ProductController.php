<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use app\Models\Product;
use app\Models\Categorie;

class ProductController extends Controller
{
    
    public function Products(){
    
        $Products = Product::get();
        return view('#',compact('Products'));
    }  



    public function show($id){
        $Products = Product::findOrFail($id);
        return view('#',compact('Products')); 
    }
    
    
    public function create(){
        $Categories = Categorie::get();
        return view('#',compact('Categories'));
        
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
    $Products = Product::findOrFail($id);
    $Categories = Categorie::get();
    return view('#',compact('Products','Categories'));
    
}


public function update($id,Request $r){
    $Products = Product::findOrFail($id);
        $Products -> update($r->all());
        return redirect()->route('#')->with('msg','Update Product is Success');
    }
    
    public function destroy($id){
        $Products = Product::findOrFail($id);
        $Products -> delete();
        return redirect()->route('#')->with('msg','Delete Product is Success');
   }
   
    public function forceDestroy($id){
        $Products = Product::withTrashed()->findOrFail($id);
        $Products ->forceDelete();
        return redirect()->route('#')->with('msg','Delete Product is Success');
    }
    
    public function archive(){
        $Products = Product::onlyTrashed()->get();
        return view('#',compact('Products'));
    }
    
    public function restore($id){
        $Products = Product::withTrashed()->findOrFail($id);
        $Products -> restore();
        return redirect()->route('#')->with('msg','Restore Product is Success');
    }

}
