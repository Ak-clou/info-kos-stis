<div class="relative" x-data="{ isOpen: false }">
    <!-- Button to open the popup -->
    <button id="filterButton" @Click="isOpen= !isOpen" :class="{ 'hidden': isOpen, 'block': !isOpen }"
        class="opacity-70 hover:opacity-100 flex fixed top-20 -right-1 items-center p-2 bg-yellow-500 text-white rounded">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707l-6.586 6.586A1 1 0 0113 14v5a1 1 0 01-1.447.894l-4-2A1 1 0 017 17v-3.586L.293 6.707A1 1 0 010 6V4a1 1 0 011-1z" />
        </svg>
        <span class="ml-2">Filter</span>
    </button>
    <div id="filterPopup " :class="{ 'hidden': !isOpen, 'block': isOpen }"
        class="fixed top-20 right-0 w-64 md:w-80 border bg-white shadow-lg rounded p-4 z-50 opacity-85">
        <div class="relative">
            <!-- Close button -->
            <button @click="isOpen=!isOpen" id="closeButton"
                class="absolute top-0 right-0 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col space-y-2">
                <label class="mt-4">
                    <span class="text-gray-700">Harga:</span>
                    <div class="md:inline-flex">
                        <input type="number" class="w-full mt-1 p-2 border rounded" placeholder="Min Harga">
                        <div class="mx-2 hidden md:block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-12 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </div>
                        <input type="text" class="w-full mt-1 p-2 border rounded" placeholder="Maks Harga">
                    </div>
                </label>
                <label class="mt-4">
                    <span class="text-gray-700">Jarak dari kampus(m):</span>
                    <div class="md:inline-flex">
                        <input type="number" class="w-full mt-1 p-2 border rounded" placeholder="Min Jarak">
                        <div class="mx-2 hidden md:block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-12 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                            </svg>
                        </div>
                        <input type="text" class="w-full mt-1 p-2 border rounded" placeholder="Maks Jarak">
                    </div>
                </label>
                <label class="block">
                    <span class="text-gray-700">Lokasi:</span>
                    <select class="w-full mt-1 p-2 border rounded text-gray-600">
                        <option value="" disabled selected>Pilih lokasi</option>
                        <option value="bonasel">Bonasel</option>
                        <option value="bonasut">Bonasut</option>
                        <option value="kebon-sayur">Kebon Sayur</option>
                    </select>
                </label>
                <label>
                    <span class="text-gray-700">Ukuran Kamar (meter):</span>
                    <div class="md:inline-flex">
                        <input type="text" class="w-1/3 mt-1 p-2 border rounded" placeholder="Panjang">
                        <div class="hidden md:block mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 -2 24 24"
                                stroke-width="1.5" stroke="currentColor" class="text-gray-500 w-6 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <input type="text" class="w-1/3 mt-1 p-2 border rounded" placeholder="Lebar">
                    </div>
                </label>
                <label class="block">
                    <span class="text-gray-700">Tipe Kost:</span>
                    <select class="w-full mt-1 p-2 border rounded text-gray-600">
                        <option value="" disabled selected>Pilih tipe</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </label>
                <div>
                    <span class="text-gray-700">Fasilitas:</span>
                    <div class="mt-1 space-y-2">
                        <div>
                            <input type="checkbox" id="ac" class="mr-2">
                            <label for="ac">AC</label>
                        </div>
                        <div>
                            <input type="checkbox" id="kipas" class="mr-2">
                            <label for="kipas">Kipas</label>
                        </div>
                        <div>
                            <input type="checkbox" id="air" class="mr-2">
                            <label for="air">Air</label>
                        </div>
                        <div>
                            <input type="checkbox" id="listrik" class="mr-2">
                            <label for="listrik">Listrik Gratis</label>
                        </div>
                        <div>
                            <input type="checkbox" id="listrik" class="mr-2">
                            <label for="wifi">Wifi</label>
                        </div>
                        <div>
                            <input type="checkbox" id="listrik" class="mr-2">
                            <label for="jemuran">Jemuran</label>
                        </div>
                        <div>
                            <input type="checkbox" id="lainnya" class="mr-2">
                            <label for="lainnya">Lainnya</label>
                        </div>
                    </div>
                </div>
                <label>
                    <button class="mt-1 px-4 py-2 bg-yellow-600 hover:bg-amber-500 text-white rounded-lg">Cari</button>
                </label>
            </div>
        </div>
    </div>
</div>
