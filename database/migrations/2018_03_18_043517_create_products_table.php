<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('image_path');
            $table->string('paypal_button');                
            $table->decimal('weight', 4, 2)->nullable();
            $table->boolean('is_vintage');
            $table->boolean('is_precious');
            $table->boolean('is_gemstone');
            $table->boolean('is_rhinestone');
            $table->boolean('is_other');          
            $table->boolean('is_active');                                               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
