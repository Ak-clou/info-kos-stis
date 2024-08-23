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
        Schema::create('kosts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('nama_kos', 100);
            $table->string('slug', 100);
            $table->string('pemilik', 100);
            $table->string('telp_pemilik', 50);
            $table->string('lokasi', 100);
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('kamar_kosong');
            $table->integer('harga_min');
            $table->integer('harga_max');
            $table->string('batasan_agama', 200);
            $table->string('s_ac', 30)->default('Tidak tersedia');
            $table->string('s_kipasangin', 30)->default('Tidak tersedia');
            $table->text('deskripsi');
            $table->string('s_wifi', 20)->default('Tidak tersedia');
            $table->string('s_kamar_mandi', 50)->default('Tidak tersedia');
            $table->string('pinpoint', 200);
            $table->string('batasan_mahasiswa', 50);
            $table->string('tipe_kos', 50);
            $table->string('tipe_bayar', 50);
            $table->integer('watt_listrik');
            $table->string('s_listrik', 50)->default('Tidak tersedia');
            $table->string('s_mejabelajar', 50)->default('Tidak tersedia');
            $table->string('s_kasur', 50)->default('Tidak tersedia');
            $table->string('s_parkir', 30)->default('Tidak tersedia');
            $table->string('s_lemari', 50)->default('Tidak tersedia');
            $table->string('s_mesincuci', 20)->default('Tidak tersedia');
            $table->string('foto', 200);
            $table->string('s_dapur', 50)->default('Tidak tersedia');
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kost');
    }
};
