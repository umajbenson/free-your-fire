<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['image_path', 'name', 'description', 'price'];
    protected $table = 'products';
}
