<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\LikeableTrait;

class Product extends Model
{
    use LikeableTrait;
    
    protected $fillable = ['category_id', 'name', 'description', 'price', 'image_path', 'paypal_button', 'weight', 'is_vintage', 'is_precious', 'is_gemstone', 'is_rhinestone', 'is_other', 'is_active'];
    protected $table = 'products';
}
