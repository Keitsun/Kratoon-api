<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('manga_id');
            $table->foreign('manga_id')
            ->references('id')
            ->on('mangas')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('chapter_id');
            $table->foreign('chapter_id')
            ->references('id')
            ->on('chapters')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            $table->unsignedBigInteger('comment_id');
            $table->foreign('comment_id')
            ->references('id')
            ->on('comments')
            ->onDelete('restrict')
            ->onUpdate('restrict');
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
        Schema::dropIfExists('likes');
    }
}
