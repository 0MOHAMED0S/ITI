<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['user_id', 'total','status'];
}
