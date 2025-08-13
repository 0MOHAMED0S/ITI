<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table ="Products";
        protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'categorie_id'
    ];
        public function Categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

}
