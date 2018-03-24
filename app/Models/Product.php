<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/*use CreateProductTable;*/

class Product extends Model
{
    protected $fillable = ['image_path', 'name', 'description', 'price'];
    protected $table = 'products';
}
