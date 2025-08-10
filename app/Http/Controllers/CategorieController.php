<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use Illuminate\Http\Request;
use app\Models\Categorie;

class CategorieController extends Controller
{


    public function Categories(){
    

        $Categories = Categorie::get();
        return view('#',compact('Categories'));
    }  


            
    public function show($id){
        $Categories = Categorie::find($id);
        return view('#',compact('Categories')); 
    }
    
    public function create(){
        return view('#');
    }

    public function add_catg(CategorieRequest $y){
        $data =$y->validated();
        Categorie::create($data);
        return redirect()->back()->with('msg','Add Categorie is Success');
    }
    public function edit($id){
        $Categories = Categorie::find($id);
        return view('#',compact('Categories'));
    }
    public function update($id,Request $r){
        $Categories = Categorie::findOrFail($id);

        $Categories -> update($r->all());
        return redirect()->route()->with('msg','Update Categorie is Success');
    }
    
    public function destroy($id){
        $Categories = Categorie::findOrFail($id);
        $Categories -> delete();
        // $Category :: destroy();
        return redirect()->route()->with('msg','Delete Categorie is Success');
    }
    
    public function forceDestroy($id){
        $Categories = Categorie::withTrashed()->findOrFail($id);
        $Categories ->restore();
        // $Category :: destroy();
        return redirect()->route()->with('msg','Delete Categorie is Success');
    }
    
    public function archive(){
        $Categories = Categorie::onlyTrashed()->get();
        return view('#',compact('Categories'));
    }

    public function restore($id){
        $Categories = Categorie::withTrashed()->findOrFail($id);
        $Categories ->Restore();
        // $Category :: destroy();
        return redirect()->route('#')->with('msg','Restore Proudect is Success');
    }


}
