<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calon_siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_calon_siswa',100);
            $table->string('asal_sekolah',100);
            $table->string('alamat',100);
            $table->date('tgllahir');
            $table->string('nama_ayah',100);
            $table->string('nomor_wa_ayah',100);
            $table->string('pekerjaan_ayah',100);
            $table->string('penghasilan_ayah',100);
            $table->string('nama_ibu',100);
            $table->string('nomor_wa_ibu',100);
            $table->string('pekerjaan_ibu',100);
            $table->string('penghasilan_ibu',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calon_siswa');
    }
};
