<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDondatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dondat', function (Blueprint $table) {
            $table->smallIncrements('dd_id');
            $table->unsignedsmallInteger('users_id');
            $table->date('ngaylap');
            $table->integer('tongtien');
            $table->foreign('users_id')->references('users_id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('dondat');
    }
}
