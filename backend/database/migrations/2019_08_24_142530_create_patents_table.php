<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('buro_id')->nullable(); // бюро - > buros
            $table->tinyInteger('patent_type')->nullable(); // тип - > pat_types
            $table->BigInteger('patent_num')->nullable(); 
            $table->timestamp('date_from')->nullable();
            $table->string('author')->nullable();
            $table->text('pname')->nullable();
            $table->tinyInteger('status')->nullable(); // 
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
        Schema::dropIfExists('patents');
    }
}
