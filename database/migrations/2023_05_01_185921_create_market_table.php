<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketTable extends Migration
{
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->id();
            $table->string('article');
            $table->float('size');
            $table->float('price');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('market');
    }
}
