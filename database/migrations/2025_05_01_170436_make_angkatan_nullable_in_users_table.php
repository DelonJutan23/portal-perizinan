<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeAngkatanNullableInUsersTable extends Migration
{
    /**
     * Menjalankan migrasi untuk mengubah kolom angkatan menjadi nullable.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('angkatan')->nullable()->change(); // Menjadikan angkatan nullable
        });
    }

    /**
     * Membatalkan perubahan jika migrasi di-rollback.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('angkatan')->nullable(false)->change(); // Mengembalikan angkatan menjadi non-nullable
        });
    }
}
