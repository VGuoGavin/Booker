<?php
// database/migrations/xxxx_xx_xx_create_reservations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id(); // 自动生成的主键
            $table->string('room_name');
            $table->string('user_name');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->timestamps(); // 自动生成的 created_at 和 updated_at 字段
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
