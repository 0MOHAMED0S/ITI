<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{


    public function Categorie(){
    
        $Categories = Categorie::get();
        return view('dashboard.categorie.allcategorie',compact('Categories'));
    }   


     public function details($id){
    $Categories = Categorie::with('products')->findOrFail($id);
    return view('wepsite.product.categorie', compact('Categories'));
    }

    public function show($id){
        $Categories = Categorie::find($id);
        return view('dashboard.categorie.categorie_actions.details',compact('Categories')); 
    }
    
    public function create(){
        return view('dashboard.categorie.addcategorie');
    }

    public function add(CategorieRequest $y){
        $data =$y->validated();
        Categorie::create($data);
        return redirect()->back()->with('msg','Add Categorie is Success');
    }
    public function edit($id){
        $Categories = Categorie::find($id);
        return view('dashboard.categorie.categorie_actions.edit',compact('Categories'));
    }
    public function update($id,Request $r){
        $Categories = Categorie::findOrFail($id);

        $Categories -> update($r->all());
        return redirect()->route('admin.categorie.table_categorie')->with('msg','Update Categorie is Success');
    }
    
    public function destroy($id){
        $Categories = Categorie::findOrFail($id);
        $Categories -> delete();
        // $Category :: destroy();
        return redirect()->route('admin.categorie.table_categorie')->with('msg','Delete Categorie is Success');
    }
    
    public function forceDestroy($id){
        $Categories = Categorie::withTrashed()->findOrFail($id);
        $Categories ->restore();
        // $Category :: destroy();
        return redirect()->route('admin.categorie.archive')->with('msg','Delete Categorie is Success');
    }
    
    public function archive(){
        $Categories = Categorie::onlyTrashed()->get();
        return view('dashboard.categorie.archive',compact('Categories'));
    }

    public function restore($id){
        $Categories = Categorie::withTrashed()->findOrFail($id);
        $Categories ->Restore();
        // $Category :: destroy();
        return redirect()->route('admin.categorie.archive')->with('msg','Restore Proudect is Success');
    }


}
