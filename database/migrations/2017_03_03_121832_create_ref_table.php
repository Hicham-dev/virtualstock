<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ref', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->integer('idConfig')->nullable();
            $table->integer('productionYear')->nullable();
            $table->string('desc')->nullable();
            $table->integer('id_MClist');
            $table->string('image')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('ref');
        
    }
}
