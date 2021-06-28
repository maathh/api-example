<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->integer('city_id')->unsigned();
            $table->string('road');
            $table->string('district');
            $table->string('complement');
            $table->integer('zip_code');
            $table->integer('number');
        });

        Schema::table('adresses', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users');
        });

        Schema::table('adresses', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
