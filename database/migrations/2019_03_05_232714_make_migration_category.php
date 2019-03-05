<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeMigrationCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_category');
            $table->integer('id_category');
        });
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('category_id');
            $table->string('director');
            $table->integer('movie_id');
            $table->year('year_released');
        });
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_member');
            $table->integer('member_id');
            $table->string('number_membership');
            $table->integer('movie_id');
            $table->date('date_rental');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
