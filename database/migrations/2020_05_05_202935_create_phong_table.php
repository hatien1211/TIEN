<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phong', function (Blueprint $table) {
            $table->smallIncrements('p_id');
            $table->string('p_ten',30);
            $table->text('p_thongtin');
            $table->text('p_tomtat');
            $table->tinyInteger('p_slmax');
            $table->tinyInteger('p_slp');
            $table->integer('p_gia');
            $table->string('p_img',30);
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
        Schema::dropIfExists('phong');
    }
}
