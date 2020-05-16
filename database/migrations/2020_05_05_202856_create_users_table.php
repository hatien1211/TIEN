<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->smallIncrements('users_id');
            $table->string('username',30);
            $table->string('password',100);
            $table->string('hoten',50);
            $table->date('ngaysinh');
            $table->tinyInteger('gioitinh')->comment('0 là nữ # 1 là nam');
            $table->string('sdt',11);
            $table->string('cmnd',9);
            $table->tinyInteger('quyen')->comment('0 là thường # 1 là admin');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
