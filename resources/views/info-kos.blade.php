<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="absolute flex top-16">
        <div class="flex flex-col items-center">
            <!-- Search Button-->
            <div class="mt-10 flex-shrink-0 m-auto font-bold text-3xl text-gray-800">Info Kos</div>
            <div name="atas" class="flex mt-6 items-center space-x-4">
                <!-- Info Kos tanpa kelas tambahan -->
                
                <!-- Input Field dengan sedikit penyesuaian lebar -->
                <label x-data="{ isFocus: false }" class="h-13 flex-grow relative">
                    <input @focus="isFocus = !isFocus" @blur="isFocus = !isFocus" type="text" placeholder="Cari Kosan.."
                        class="border-gray-400 xl:h-10 opacity-90 pl-10 pr-4 py-1 rounded-full focus:outline-none hover:outline-none border focus:ring-2 hover:ring-1 focus:ring-yellow-700 hover:ring-yellow-600 w-[320px]">
                    <div :class="{ 'text-yellow-700': isFocus, 'text-gray-400': !isFocus }"
                        class="absolute left-3 top-1/2 transform -translate-y-1/2 hover:text-yellow-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </div>
                </label>
                
                <!-- Popup -->
                <x-filter-popup></x-filter-popup>
            </div>
            
            
            
            <!-- Content -->
            <div class=" md:w-auto p-6 lg:mt-3 xl:mt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 xl:gap-6">

                    <!-- Card -->
                    @foreach ($kosts as $kost)
                        <div
                            class="flex flex-col md:flex-row bg-white drop-shadow-md rounded-lg overflow-hidden md:h-44 border-gray">

                            <!-- Image slider -->
                            <div class="w-full md:w-1/2">
                                <div class="relative h-44 md:h-auto">
                                    <img src="<?php echo $kost['foto'] ?>" alt="Kos 1"
                                        class="object-cover h-full w-full">
                                </div>
                            </div>

                            <!-- Kos Detail -->
                            <div class="p-2 lg:p-4 flex flex-col justify-between w-full md:w-1/2">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-700">{{ $kost['nama_kos'] }}</h3>
                                    <p class="hover:text-amber-950 text-sm text-gray-600 averia-serif-libre-regular">
                                        <a href="#">{{ $kost['lokasi'] }}</a>
                                    </p>
                                    <p class="text-base text-xl font-bold text-blue-600 averia-serif-libre-bold">Rp{{ $kost['harga']}}<span class="text-sm font-normal">/bulan</span> </p>
                                </div>
                                <div class="my-2 md:mt-0">
                                    <a href="/detail-kos"
                                        class="px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-500 rounded-lg">Lihat
                                        Detail</a>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>


</x-layout>
