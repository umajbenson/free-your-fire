<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTypeTypTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_type_typ', function (Blueprint $table) {
            $table->increments('id_typ');
            $table->string('name_typ', 10)->unique();       
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
        //Schema::dropIfExists('users_addresses_usradd');
        //Schema::disableForeignKeyConstraints(); 
        Schema::dropIfExists('address_type_typ');
        //Sch‌​ema::enableForeignKe‌​yConstraints();
    }
}
