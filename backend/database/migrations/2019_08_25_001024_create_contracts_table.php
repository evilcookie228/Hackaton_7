<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('seller_id')->nullable(); 
            $table->Integer('buyer_id')->nullable(); 
            $table->Integer('patent_id')->nullable(); 
            $table->tinyInteger('type')->nullable(); // аренда - продажа
            $table->tinyInteger('status')->nullable(); // заказ - ожидание -исполнен
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
        Schema::dropIfExists('contracts');
    }
}
