<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAddressesUsraddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_addresses_usradd', function (Blueprint $table) {
            $table->increments('id_usradd');
            $table->integer('id_typ')->unsigned();
            $table->foreign('id_typ')->references('id_typ')->on('address_type_typ');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('id_add')->unsigned();
            $table->foreign('id_add')->references('id_add')->on('addresses_add');
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
        Schema::dropIfExists('users_addresses_usradd');
    }
}
