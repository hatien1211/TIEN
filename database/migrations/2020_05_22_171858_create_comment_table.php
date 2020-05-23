<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('cmt_id');
            $table->unsignedsmallInteger('users_id');
            $table->unsignedSmallInteger('p_id');
            $table->text('cmt_text');
            $table->timestamps();
            $table->foreign('users_id')->references('users_id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('p_id')->references('p_id')->on('phong')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment');
    }
}
