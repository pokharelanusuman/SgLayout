<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('street', 255)->nullable();

            $table->foreign('country_id')->references('id')->on('countries')
                    ->onDelete('Set Null')
                    ->onUpdate('Cascade');
            $table->foreign('state_id')->references('id')->on('states')
                    ->onDelete('Set Null')
                    ->onUpdate('Cascade');
            $table->foreign('region_id')->references('id')->on('regions')
                    ->onDelete('Set Null')
                    ->onUpdate('Cascade');
            $table->foreign('city_id')->references('id')->on('cities')
                    ->onDelete('Set Null')
                    ->onUpdate('Cascade');
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
        Schema::dropIfExists('addresses');
    }
}
