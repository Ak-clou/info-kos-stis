<x-layout-client>
    <div class="absolute flex top-16 w-full">
        <div class="flex flex-col w-full items-center">
            <div class="w-full p-6 lg:mt-3 xl:mt-4 flex justify-center">
                <div class="grid grid-cols-1 gap-4 lg:max-w-7xl sm:px-16 md:px-24 md:py-9 items-center ">

                    <!-- Popup Jenis Kamar -->
                    <div class="fixed z-10 gap-2 flex-col flex -right-1 top-20">
                        <!-- Button to open the popup -->
                        <button id="selectRoom"
                            class="px-5 opacity-70 hover:opacity-100  items-center py-2 bg-yellow-500 text-white rounded-lg">
                            <span class="averia-serif-libre-regular">Kamar 1</span>
                        </button>
                        <button id="selectRoom"
                            class="px-5 opacity-70 hover:opacity-100 items-center py-2 bg-yellow-500 text-white rounded-lg">
                            <span class="averia-serif-libre-regular">Kamar 2</span>
                        </button>
                        <button id="selectRoom"
                            class="px-5 opacity-70 hover:opacity-100 items-center py-2 bg-yellow-500 text-white rounded-lg">
                            <span class="averia-serif-libre-regular">Kamar 3</span>
                        </button>
                    </div>

                    <!-- Image -->
                    <div class="drop-shadow-xl border rounded-lg overflow-hidden h-60 sm:h-72 md:h-80 lg:h-96 ">
                        <!-- Image slider -->
                        <div class="w-full md:w-auto h-full">
                            <div class="relative h-full">
                                <img src="https://via.placeholder.com/300x200" alt="Kos 1"
                                    class="object-cover h-full w-full">
                            </div>
                        </div>
                    </div>

                    <!-- Kos details -->
                    <div class="flex flex-col md:flex-row bg-white drop-shadow-xl rounded-lg overflow-hidden">
                        <div class="p-2 flex flex-col justify-between w-full md:p-4 lg:p-5">
                            <div>
                                <h3 class="sm:text-2xl text-xl averia-serif-libre-bold">Nama Kos 1</h3>
                                <label
                                    class="grid-cols-12 grid sm:text-base text-sm text-gray-600 averia-serif-libre-regular">
                                    <p class="col-span-2">Keterangan</p>
                                    <p class="text-right">:</p>
                                </label>
                                <br>
                                <div class="">
                                    <a href="https://www.google.com/maps"
                                        class="cursor-pointer grid-cols-12 grid sm:text-base hover:text-amber-950 text-sm text-gray-600 averia-serif-libre-regular">
                                        <p class="col-span-1">Lokasi</p>
                                        <p class="text-right">:</p>
                                        <p class="col-span-10 text-blue-700 underline hover:text-blue-800">
                                            &nbsp;Jl. Contoh No.
                                            1</p>
                                    </a>
                                    <label
                                        class="grid-cols-12 grid sm:text-base text-sm text-gray-600 averia-serif-libre-regular">
                                        <p class="col-span-1">Harga</p>
                                        <p class="text-right">:</p>
                                        <a
                                            class="col-span-10 sm:text-lg text-base text-amber-600 averia-serif-libre-bold">&nbsp;Rp
                                            1.000.000 /
                                            bulan
                                        </a>
                                    </label>
                                    <label
                                        class="cursor-pointer grid-cols-12 grid sm:text-base text-sm text-gray-600 averia-serif-libre-regular">
                                        <p class="col-span-1">Tersisa</p>
                                        <p class="text-right">:</p>
                                        <p class="col-span-10">
                                            &nbsp;5 kamar</p>
                                    </label>
                                    <label
                                        class="grid-cols-12 grid sm:text-base text-sm text-gray-600 averia-serif-libre-regular">
                                        <p class="col-span-1">Kontak</p>
                                        <p class="text-right">:</p>
                                        <label class="col-span-10 grid grid-flow-row">
                                            <a class="list-decimal hover:text-amber-950" href="#">
                                                &nbsp;081234567890 (Pak Agus)</a>
                                            <a class="list-decimal hover:text-amber-950" href="#">
                                                &nbsp;081234567890 (Pak Agus)</a>
                                        </label>
                                    </label>
                                </div>
                                <label
                                    class="grid-cols-12 grid sm:text-base text-sm text-gray-600 averia-serif-libre-regular">
                                    <p class="col-span-1">Fasilitas</p>
                                    <p class="text-right">:</p>
                                </label>

                                <!-- Fasilitas Svg -->
                                <div class="mt-2 place-items-center grid grid-cols-3 sm:grid-cols-4">
                                    <x-listrik-svg></x-listrik-svg>
                                    <x-wifi-svg></x-wifi-svg>
                                    <x-toilet-svg></x-toilet-svg>
                                    <x-luas-svg></x-luas-svg>
                                    <x-keran-svg></x-keran-svg>
                                    <x-mahasiswa-svg></x-mahasiswa-svg>
                                    <x-jarak-svg></x-jarak-svg>
                                    <x-parkir-svg></x-parkir-svg>
                                    <x-jendela-svg></x-jendela-svg>
                                    <x-jemuran-svg></x-jemuran-svg>
                                    <x-ac-svg></x-ac-svg>
                                    <x-kipas-svg></x-kipas-svg>
                                    <x-ventilasi-svg></x-ventilasi-svg>
                                </div>

                            </div>
                            <div class="my-2 md:mt-0">
                                <a href="/"
                                    class="px-4 py-2 bg-yellow-600 hover:bg-amber-500 text-white rounded-lg">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-client>
