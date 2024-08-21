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
        Schema::create('kost', function (Blueprint $table) {
            $table->id(); 
            $table->string('nama_kos', 100);
            $table->string('slug', 100);
            $table->string('pemilik', 100);
            $table->string('lokasi', 100);
            $table->string('luas_kamar', 100);
            $table->integer('harga');
            $table->string('batasan_agama', 200);
            $table->string('s_pendingin', 50);
            $table->string('fasilitas', 100);
            $table->text('deskripsi');
            $table->boolean('s_wifi');
            $table->string('s_kamar_mandi', 50);
            $table->string('pinpoint', 50);
            $table->string('batasan_mahasiswa', 50);
            $table->string('tipe_kos', 50);
            $table->string('tipe_bayar', 50);
            $table->integer('watt_listrik');
            $table->string('s_listrik', 50);
            $table->string('s_mejabelajar', 50);
            $table->string('s_kasur', 50);
            $table->string('foto', 50);
            $table->string('s_dapur', 50);

            $table->timestamps();
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
