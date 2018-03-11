<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*use CreateProductTable;*/

class Product extends Model
{
    protected $fillable = ['image_path_pro', 'name_pro', 'description_pro', 'price_pro'];
}
