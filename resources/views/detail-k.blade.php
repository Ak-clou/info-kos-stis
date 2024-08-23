<x-layout>
    
    <style>
    </style>
    <div class="bg-white">
        <div class="pt-6">
            <nav aria-label="Breadcrumb" class="mx-10">
                <div class="flex justify-start">
                    <div class="px-2 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md">
                        <a href="#" class="text-white font-medium">Kembali</a>
                    </div>
                </div>
            </nav>

            
            
            
            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6">
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                    alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
            </div>

            <!-- Product info -->
            <div
            class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $kost['nama_kos'] }}</h1>
                <p class="mt-1 mb-4">{{ $kost['lokasi'] }}</p>
            </div>
            
            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <div class="border-b border-gray-200 pb-5">
                    <p class="text-3xl font-bold tracking-tight text-gray-900">
                        Rp{{ $kost['harga_min'] }}-{{ $kost['harga_max'] }}</p>
                    </div>
                    <!-- Reviews -->


                    <form class="mt-4">
                        <!-- Colors -->
                        <div class="mt-4">
                            <div class="justify-between font-medium">
                                <h3 class="text-sm text-gray-900">Batasan</h3>
                                <div
                                    class="flex justify-between border border-gray-200 rounded-md mt-2 overflow-hidden">
                                    <x-mahasiswa-svg class="flex-shrink-0"></x-mahasiswa-svg>
                                    <x-toilet-svg class="flex-shrink-0"></x-toilet-svg>
                                    <x-parkir-svg class="flex-shrink-0"></x-parkir-svg>
                                </div>

                            </div>
                        </div>

                        <!-- Sizes -->
                        <div class="mt-10">
                            <div class="justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Pemilik</h3>
                                <a href="https://wa.me/<?php echo $kost['telp_pemilik']; ?>"
                                    class="flex justify-between mt-4 border border-gray-400 px-3 py-3 rounded-md">
                                    <div>
                                        <p class="text-2xl font-medium">{{ $kost['pemilik'] }}</p>
                                        <p class="">{{ $kost['telp_pemilik'] }}</p>
                                    </div>
                                    <img src="https://seeklogo.com/images/W/whatsapp-logo-0DBD89C8E2-seeklogo.com.png"
                                        class="h-10" alt="">
                                </a>
                            </div>
                        </div>



                        <button type="submit"
                            class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Buka
                            di Maps</button>
                    </form>
                </div>

                <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                    <!-- Description and details -->
                    <div>
                        <h3 class="sr-only" style="display: none">Deskripsi</h3>

                        <div class="space-y-6">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Fasilitas</h3>
                                <div class="flex justify-between">
                                    <x-wifi-svg style="<?php echo $kost['s_wifi'] == 'Tersedia' ? 'display:block' : 'display:none'; ?>"></x-wifi-svg>
                                    <x-listrik-svg style="<?php echo $kost['s_listrik'] == 'Tersedia' ? 'display:block' : 'display:none'; ?>"></x-listrik-svg>
                                    <x-ac-svg style="<?php echo $kost['s_ac'] == 'Tersedia' ? 'display:block' : 'display:none'; ?>"></x-ac-svg>
                                    <x-kipas-svg style="<?php echo $kost['s_kipasangin'] == 'Tersedia' ? 'display:block' : 'display:none'; ?>"></x-kipas-svg>
                                    <x-ventilasi-svg style="<?php echo $kost['s_ventilasi'] == 'Tersedia' ? 'display:block' : 'display:none'; ?>"></x-ventilasi-svg>
                                    <x-parkir-svg style="<?php echo $kost['s_parkir'] == 'Tersedia' ? 'display:block' : 'display:none'; ?>"></x-parkir-svg>
                                    <x-wifi-svg style="display:none"></x-wifi-svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-sm font-medium text-gray-900">Fasilitas lainnya</h3>

                        <div class="mt-4">
                            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span>
                                </li>
                                <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                        colors</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp;
                                        pre-shrunk</span></li>
                                <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-10">
                        <h2 class="text-sm font-medium text-gray-900">Details</h2>

                        <div class="mt-4 space-y-6">
                            <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                gray Basic Tees. Sign up for our subscription service and be the first to get new,
                                exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
