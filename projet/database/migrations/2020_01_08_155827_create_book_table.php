<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->mediumText('about');
            $table->integer('numberPage');
            $table->string('img');
            $table->string('tags');
            $table->string('url');
            $table->unsignedBigInteger('idCategory');
            $table->unsignedBigInteger('idUser');
            $table->boolean('status');
            $table->timestamps();

            // foreign key

            // User
            $table->foreign('idUser')
                ->references('id')
                ->on('users');

            // Category
            $table->foreign('idCategory')
                ->references('id')
                ->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
