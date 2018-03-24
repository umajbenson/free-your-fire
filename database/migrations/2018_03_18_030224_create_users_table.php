<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        //Schema::dropIfExists('address_user');
        //Schema::dropIfExists('orders');

        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->boolean('is_admin');
            $table->boolean('is_active'); 
            $table->string('remember_token');
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
        //Schema::dropIfExists('address_user');
        //Schema::dropIfExists('orders');
        
        
        Schema::dropIfExists('users');
    }
}
