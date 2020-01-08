<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('about');
            $table->longText('aboutCours');
            $table->string('idPlayList');
            $table->string('img');
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_users');
            $table->string('tags');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('id_category')->references('id')->on('category');
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cours');
    }
}
