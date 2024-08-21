<nav class="fixed w-full z-20 top-0 shadow-lg bg-orange-200 animate-slideDown" x-data="{ isOpen: false }">
    <div class="mx-auto px-4 sm:px-6 lg:px-20">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center flex-shrink-0">
                <img class="h-14 w-14" src="../img/logo-pmb-2024.png" alt="Your Company">
                <div class="ml-3 text-3xl averia-serif-libre-bold">Info Kost</div>
            </div>
            <!-- Menu items for larger screens -->
            <div class="hidden sm:flex items-center space-x-4">
                <a href="/"
                    class="averia-serif-libre-bold rounded-lg bg-gray-500 bg-opacity-30 text-black hover:bg-opacity-60 px-5 py-2 text-sm">Kostan</a>
                <a href="/rumahsewa"
                    class="averia-serif-libre-bold rounded-lg bg-gray-500 bg-opacity-30 text-black hover:bg-opacity-60 px-5 py-2 text-sm">Rumah
                    Sewa</a>
            </div>
            <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen"
                class="z-40 block sm:hidden hover:bg-gray-500 hover:bg-opacity-40 w-12 align-middle active:border-white rounded-md">
                <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="-2 0 28 18" stroke-width="1.7" stroke="currentColor" class="h-9 w-12">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 3.75h16.5M3.75 9h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg :class="{ 'hidden': !isOpen, 'block': isOpen }" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="8 0 8.5 24" stroke-width="1.7" stroke="currentColor" class="h-9 w-12">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile menu items -->
    <div :class="{ 'hidden': !isOpen, 'block': isOpen }"
        class="z-30 sm:hidden p-1 w-1/2 absolute items-start flex flex-col bg-yellow-600 bg-opacity-50 right-0 rounded-lg space-y-1 top-0 pt-16">
        <a href="/"
            class="block averia-serif-libre-bold rounded-lg bg-stone-200 hover:bg-white bg-opacity-80 text-black hover:bg-opacity-90 px-5 py-2 text-sm w-full">Kostan</a>
        <a href="/rumahsewa"
            class="block averia-serif-libre-bold rounded-lg bg-stone-200 hover:bg-white bg-opacity-80 text-black hover:bg-opacity-90 px-5 py-2 text-sm w-full">Rumah
            Sewa</a>
    </div>
</nav>
