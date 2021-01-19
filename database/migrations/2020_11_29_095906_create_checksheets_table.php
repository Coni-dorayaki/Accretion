<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecksheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checksheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName'); 
            $table->string('name'); 
            $table->string('date'); 
            $table->string('temp');
            $table->string('humi');
            $table->string('clean');
            $table->string('body')->nullable();  
            $table->string('image_path')->nullable();  
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
        Schema::dropIfExists('checksheets');
    }
}
