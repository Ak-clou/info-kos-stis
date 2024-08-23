<x-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <x-slot:title>{{ $title }}</x-slot:title>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->

    <div class="border-b border-gray-300 pb-5">
        <div class="text-center mt-10 flex-shrink-0 m-auto font-bold text-3xl text-gray-800">Form Menambahkan Info Kos
        </div>
    </div>
    <form method="POST" action="/create" class="lg:mx-20">
        @csrf
        <div class="space-y-4">
            <div class="pb-12">
                <div class="mt-3 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-6 border-b border-gray-300 pb-6">
                        <p class="text-2xl font-bold">General</p>
                        <div class="sm:col-span-4 my-4">
                            <label for="nama_kos" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Kos</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="nama_kos" id="nama_kos"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="hidden sm:col-span-4 my-4">
                            <label for="nama_kos" class="block text-sm font-medium leading-6 text-gray-900">Slug</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="slug" id="slug"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-4 my-4">
                            <label for="pemilik" class="block text-sm font-medium leading-6 text-gray-900">Nama
                                Pemilik</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="pemilik"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-4 my-4">
                            <label for="telp_pemilik" class="block text-sm font-medium leading-6 text-gray-900">Nomor WA
                                Pemilik</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="telp_pemilik" id="telp_pemilik"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-4 my-4">
                            <label for="kamar_kosong" class="block text-sm font-medium leading-6 text-gray-900">Kamar
                                kosong tersedia</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="kamar_kosong" id="kamar_kosong" value="100"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-6 flex">
                            <div class="flex-1">
                                <label for="lokasi" class="block text-sm font-medium leading-6 text-gray-900">Alamat
                                    Kos</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="lokasi"
                                            class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1 ml-20">
                                <label for="pinpoint"
                                    class="block text-sm font-medium leading-6 text-gray-900">Pinpoint</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="pinpoint" id="pinpoint"
                                            class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-6 flex mt-4">
                            <div class="flex-1">
                                <label for="harga" class="block text-sm font-medium leading-6 text-gray-900">Harga
                                    Kamar (PerBulan)</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md sm:max-w-md">
                                        <input type="text" name="harga_min" placeholder="Harga minimal"
                                            class="pl-2 mr-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <input type="text" name="harga_max" placeholder="Harga maksimal"
                                            class="pl-2 ml-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-1">
                                <label for="tipe_bayar" class="block text-sm font-medium leading-6 text-gray-900">Tipe
                                    Pembayaran</label>
                                <div class="mt-2">
                                    <select name="tipe_bayar"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>Bulanan</option>
                                        <option>Tahunan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-6 border-b border-gray-300 pb-6">
                        <p class="text-2xl font-bold">Batasan</p>
                        <div class="sm:col-span-6 my-4">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Batasan Agama</legend>
                            <div class="mt-4 flex space-x-8">
                                <!-- Pilihan 1 -->
                                <div class="flex items-center">
                                    <input id="muslim-saja" name="batasan_agama" type="radio" value="Muslim saja"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="muslim-saja" class="ml-2 text-sm leading-6 text-gray-900">Muslim
                                        saja</label>
                                </div>
                                <!-- Pilihan 2 -->
                                <div class="flex items-center">
                                    <input id="semua-agama" name="batasan_agama" type="radio"
                                        value="Untuk semua agama"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="semua-agama"
                                        class="ml-2 text-sm leading-6 text-gray-900">Diperbolehkan
                                        untuk
                                        semua
                                        agama</label>
                                </div>
                            </div>
                        </div>

                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Tipe Kos</legend>
                            <div class="mt-4 space-y-2">
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="comments" name="tipe_kos" type="radio"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label class=" text-gray-900">Laki-Laki</label>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="candidates" name="tipe_kos" type="radio"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label class=" text-gray-900">Perempuan</label>
                                    </div>
                                </div>
                                <div class="relative flex gap-x-3">
                                    <div class="flex h-6 items-center">
                                        <input id="candidates" name="tipe_kos" type="radio"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    </div>
                                    <div class="text-sm leading-6">
                                        <label for="candidates" class=" text-gray-900">Campur</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="sm:col-span-6">
                            <legend class="text-sm font-semibold leading-6 mt-4 text-gray-900">Siapa saja yang boleh
                                kos disitu?</legend>
                            <div class="mt-4 flex space-x-8">
                                <!-- Pilihan 1 -->
                                <div class="flex items-center">
                                    <input id="umum" name="batasan_mahasiswa" type="radio" value="umum"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="umum" class="ml-2 text-sm leading-6 text-gray-900">Umum</label>
                                </div>
                                <!-- Pilihan 2 -->
                                <div class="flex items-center">
                                    <input id="" name="batasan_mahasiswa" type="radio"
                                        value="Khusus Mahasiswa STIS"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="khusus-stis" class="ml-2 text-sm leading-6 text-gray-900">Khusus
                                        mahasiswa Polstat STIS</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-6 border-b border-gray-300 pb-6">
                        <p class="text-2xl font-bold">Detail Kamar</p>
                        <div class="sm:col-span-4 mt-4">
                            <label for="luas" class="block text-sm font-medium leading-6 text-gray-900">Luas
                                Kamar</label>
                            <div class="mt-2">
                                <div class="flex rounded-md sm:max-w-md">
                                    <input type="number" name="panjang" placeholder="Panjang"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-200 sm:text-sm sm:leading-6">
                                    <input type="number" name="lebar" placeholder="Lebar"
                                        class="ml-2 pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-200 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>



                        <div class="sm:col-span-6 flex mt-4">
                            <div class="flex-1">
                                <label for="listrik" class="block text-sm font-medium leading-6 text-gray-900">Besar
                                    daya listrik (VA / Watt)</label>
                                <div class="mt-2">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="watt_listrik"
                                            class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-1 ml-4">
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tipe
                                    Pembayaran</label>
                                <div class="mt-2">
                                    <select id="country" name="s_listrik" autocomplete="country-name"
                                        class="pl-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option>Sudah termasuk biaya kos</option>
                                        <option>Di luar biaya kos</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="sm:col-span-6 mt-4">
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Kamar mandi</legend>
                            <div class="mt-4 flex space-x-8">
                                <!-- Pilihan 1 -->
                                <div class="flex items-center">
                                    <input name="s_kamar_mandi" type="radio" value="Dalam"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label class="ml-2 text-sm font-medium leading-6 text-gray-900">Dalam</label>
                                </div>
                                <!-- Pilihan 2 -->
                                <div class="flex items-center">
                                    <input name="s_kamar_mandi" type="radio" value="Luar"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label class="ml-2 text-sm font-medium leading-6 text-gray-900">Luar</label>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6 mt-4">
                            <!-- Grup Pendingin -->


                            <!-- Grup Fasilitas Tambahan -->
                            <div>
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Fasilitas Tambahan
                                </legend>
                                <div class="mt-2 space-y-2">
                                    <div class="mt-2 space-y-2">
                                        <input id="ac" name="s_ac" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="ac" class="text-sm font-medium text-gray-900">AC</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="kipas" name="s_kipasangin" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="kipas" class="text-sm font-medium text-gray-900">Kipas
                                            angin</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="wifi" name="s_kasur" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="wifi" class="text-sm font-medium text-gray-900">Kasur</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="wifi" name="s_mejabelajar" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="wifi" class="text-sm font-medium text-gray-900">Meja
                                            belajar</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="wifi" name="s_wifi" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="wifi" class="text-sm font-medium text-gray-900">Wi-Fi</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="wifi" name="s_parkir" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="wifi" class="text-sm font-medium text-gray-900">Parkiran
                                            motor</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_dapur" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv" class="text-sm font-medium text-gray-900">Dapur
                                            bersama</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_lemari" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv" class="text-sm font-medium text-gray-900">Lemari</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_kulkas" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv" class="text-sm font-medium text-gray-900">Kulkas</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_tempatjemuran" type="checkbox"
                                            value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv" class="text-sm font-medium text-gray-900">Tempat
                                            Jemuran</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_rooftoop" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv"
                                            class="text-sm font-medium text-gray-900">Rooftop</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_mesincuci" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv" class="text-sm font-medium text-gray-900">Mesin
                                            cuci</label>
                                    </div>
                                    <div class="relative flex gap-x-3 items-center">
                                        <input id="tv" name="s_ventilasi" type="checkbox" value="Tersedia"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tv" class="text-sm font-medium text-gray-900">Ventilasi</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-span-full mt-4">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Keterangan
                                Tambahan</label>
                            <div class="mt-2">
                                <textarea id="about" name="deskripsi" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about yourself.</p>
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Foto
                            Kos-Kosan</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="foto" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const nama_kos = document.querySelector('#nama_kos');
                    const slug = document.querySelector('#slug');

                    if (nama_kos) {
                        nama_kos.addEventListener('input', function() {
                            console.log('Input value:', nama_kos.value); // Menampilkan nilai input
                            fetch(`/create/checkSlug?nama_kos=${encodeURIComponent(nama_kos.value)}`)
                                .then(response => response.json())
                                .then(data => {
                                    console.log('Received data:', data); // Menampilkan data dari server
                                    if (slug) {
                                        slug.value = data.slug;
                                    } else {
                                        console.error('Slug input not found');
                                    }
                                })
                                .catch(error => console.error('Error:', error));
                        });
                    } else {
                        console.error('Nama kos input not found');
                    }
                });
            </script>





            {{-- <div class="col-span-full">
                        <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                        <div class="mt-2 flex items-center gap-x-3">
                            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <button type="button"
                                class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                        </div>
                    </div>  --}}



            <div class="border-b">
                <div class="mt-10 space-y-10">


                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6 pb-10">
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim</button>
        </div>
    </form>

</x-layout>
