<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsProTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_pro', function (Blueprint $table) {
            $table->increments('id_pro');
            $table->integer('id_cat')->unsigned();
            $table->foreign('id_cat')->references('id_cat')->on('categories_cat');
            $table->string('name_pro', 75);
            $table->text('description_pro');
            $table->integer('price_pro');
            $table->string('image_path_pro', 60);
            $table->decimal('weight_pro', 4, 2)->nullable();
            $table->boolean('is_vintage_pro');
            $table->boolean('is_precious_pro');
            $table->boolean('is_gemstone_pro');
            $table->boolean('is_rhinestone_pro');
            $table->boolean('is_other_pro');          
            $table->boolean('is_active_pro');                                               
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
        Schema::dropIfExists('products_pro');
    }
}
