<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id(); // ID auto-increment
            $table->string('nim', 12); // NIM dengan panjang 12 karakter
            $table->string('name'); // Nama
            $table->date('permit_day'); // Tanggal izin
            $table->string('course'); // Mata kuliah
            $table->text('reason'); // Alasan izin
            $table->string('supporting_file')->nullable(); // File pendukung (nullable)
            $table->timestamps(); // Created_at dan updated_at
        });
    }

    /**
     * Membatalkan migration (drop tabel jika diperlukan).
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
