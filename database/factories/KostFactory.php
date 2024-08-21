<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kost>
 */
class KostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_kos' => fake()->sentence(2),
            'slug' => fake()->name(),
            'pemilik' => fake()->name(),
            'telp_pemilik' => fake()->phoneNumber(),
            'lokasi' => fake()->address(),
            'luas_kamar' => rand(2, 8) . " x " . rand(2, 8),
            'harga' => rand(500000, 2000000),
            'batasan_agama' => array_rand(array("Umum", "Muslim saja")),
            's_pendingin' => array_rand(array("Dengan AC", "Tanpa AC")),
            'fasilitas' => fake()->sentence(),
            'deskripsi' => fake()->paragraph(),
            's_wifi' => array_rand(array("Tersedia", "Tidak Tersedia")),
            's_kamar_mandi' => array_rand(array("Luar", "Dalam")),
            'pinpoint' => fake()->latitude() . "," . fake()->longitude(),
            'batasan_mahasiswa' => array_rand(array("Umum", "Mahasiswa STIS")),
            'tipe_kos' => array_rand(array("Pria", "Wanita", "Campur")),
            'tipe_bayar' => 'Bulanan',
            'watt_listrik' => array_rand(array(450, 900, 1300, 2300)),
            's_listrik' => array_rand(array("Termasuk Biaya Kos", "Bayar Sendiri")),
            's_mejabelajar' => array_rand(array("Tersedia", "Tidak Tersedia")),
            's_kasur' => array_rand(array("Tersedia", "Tidak Tersedia")),
            's_dapur' => array_rand(array("Tersedia", "Tidak Tersedia")),
            'foto' => 'https://cdn.idntimes.com/content-images/post/20240131/foto-cover-42cfd937a37db9fd3d57499b58d7a33c_600x400.jpg'
        ];
    }
}
