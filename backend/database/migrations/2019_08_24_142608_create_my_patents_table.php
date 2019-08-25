<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyPatentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_patents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('user_id')->nullable(); 
            $table->BigInteger('pat_id')->nullable(); 
            $table->Integer('sell_cost')->nullable();
            $table->Integer('rent_cost')->nullable();
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
        Schema::dropIfExists('my_patents');
    }
}
