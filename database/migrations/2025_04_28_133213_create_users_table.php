<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id_user')->primary(); // ID user bisa diisi sendiri
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('prodi');
            $table->integer('angkatan');
            $table->string('password');
            $table->enum('role', ['admin', 'mahasiswa', 'dosen']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
