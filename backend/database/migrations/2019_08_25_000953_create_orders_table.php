<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('seller_id')->nullable(); 
            $table->Integer('buyer_id')->nullable(); 
            $table->Integer('patent_id')->nullable(); 
            $table->tinyInteger('type')->nullable(); // аренда - продажа
            $table->tinyInteger('Status')->nullable(); // заказ - ожидание -исполнен
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
        Schema::dropIfExists('orders');
    }
}
