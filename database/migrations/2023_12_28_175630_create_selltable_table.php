<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelltableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selltable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigIncrement('category_id');
            $table->string('Name');
            $table->string('Price');
            $table->string('Description');
            $table->string('link');
            $table->string('image');
            $table->timestamps();
            $table->foreign('category_id')->refernces('id')->on('categorytable')->onDelete('casecade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selltable');
    }
}
