<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses_add', function (Blueprint $table) {
            $table->increments('id_add');
            $table->integer('id_sta')->unsigned();
            $table->foreign('id_sta')->references('id_sta')->on('states_sta');
            $table->string('line1_add', 45);
            $table->string('line2_add', 45)->nullable();
            $table->string('city_add', 45);
            $table->string('zip_code_add', 10);          
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
        Schema::dropIfExists('addresses_add');
    }
}
