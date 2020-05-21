<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitietdondatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdondat', function (Blueprint $table) {
            $table->unsignedSmallInteger('dd_id');
            $table->unsignedSmallInteger('p_id');
            $table->date('checkin');
            $table->date('checkout');
            $table->primary(['dd_id', 'p_id']);
            $table->foreign('dd_id')->references('dd_id')->on('dondat')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('p_id')->references('p_id')->on('phong')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('chitietdondat');
    }
}
