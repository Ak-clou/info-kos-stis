<x-layout-client>
    <div class="absolute flex top-16 w-full">
        <div class="flex flex-col w-full items-center">
            <div class="xl:mt-5 xl:text-7xl mt-3  text-4xl md:text-5xl averia-serif-libre-bold">
                Kostan
            </div>

            <!-- Search Button-->
            <label x-data="{ isFocus: false }" class="relative h-13 mt-1 md:mt-3 xl:mt-5 md:w-80 xl:w-96">
                <input @focus="isFocus = !isFocus" @blur="isFocus = !isFocus" type="text" placeholder="Search..."
                    class="border-gray-400 xl:h-10 opacity-90 w-full pl-10 pr-4 py-1 rounded-full focus:outline-none hover:outline-none border focus:ring-2 hover:ring-1 focus:ring-yellow-700 hover:ring-yellow-600">
                <div :class="{ 'text-yellow-700': isFocus, 'text-gray-400': !isFocus }"
                    class="absolute left-3 top-1/2 transform -translate-y-1/2  hover:text-yellow-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                </div>
            </label>

            <!-- Content -->
            <div class="w-full md:w-auto p-6 lg:mt-3 xl:mt-4">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 xl:gap-6">

                    <!-- Card -->
                    @for ($i = 0; $i < 30; $i++)
                        <div
                            class="flex flex-col md:flex-row bg-white drop-shadow-xl rounded-lg overflow-hidden md:h-44">

                            <!-- Image slider -->
                            <div class="w-full md:w-1/2">
                                <div class="relative h-44 md:h-auto">
                                    <img src="https://via.placeholder.com/300x200" alt="Kos 1"
                                        class="object-cover h-full w-full">
                                </div>
                            </div>

                            <!-- Kos Detail -->
                            <div class="p-2 lg:p-4 flex flex-col justify-between w-full md:w-1/2">
                                <div>
                                    <h3 class="text-xl averia-serif-libre-bold">Nama Kos i</h3>
                                    <p class="hover:text-amber-950 text-sm text-gray-600 averia-serif-libre-regular">
                                        <a href="#">Lokasi:
                                            Jl. Contoh No.
                                            1</a>
                                    </p>
                                    <p class="text-sm text-gray-600 averia-serif-libre-regular">Harga:
                                        <a class="text-base text-amber-600 averia-serif-libre-bold">Rp 1.000.000 /
                                            bulan
                                        </a>
                                    </p>
                                </div>
                                <div class="my-2 md:mt-0">
                                    <a href="/detail-kos"
                                        class="px-4 py-2 bg-yellow-600 hover:bg-amber-500 text-white rounded-lg">Lihat
                                        Detail</a>
                                </div>
                            </div>

                        </div>
                    @endfor

                </div>
            </div>

        </div>
    </div>

    <!-- Popup -->
    <x-filter-popup></x-filter-popup>

</x-layout-client>
