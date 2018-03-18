<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductsOrdprodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products_ordprod', function (Blueprint $table) {
            $table->increments('id_ordprod');
            $table->integer('id_ord')->unsigned();
            $table->foreign('id_ord')->references('id_ord')->on('orders_ord');
            $table->integer('id_pro')->unsigned();
            $table->foreign('id_pro')->references('id_pro')->on('products_pro');
            $table->decimal('purchase_price_ordprod', 6, 2);
            $table->tinyInteger('quantity_ordprod');
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
        Schema::dropIfExists('orders_products_ordprod');
    }
}
