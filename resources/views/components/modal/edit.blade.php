<div class="fixed inset-0 w-full h-full z-20 bg-gray-200 bg-opacity-50 duration-300 overflow-y-auto" x-show="showModal2"
    x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div class="relative bg-white shadow-lg rounded-md overflow-hidden text-gray-900 z-20 p-4" @click.away="showModal2 = false"
            x-show="showModal2" x-transition:enter="transition transform duration-300"
            x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
            x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100"
            x-transition:leave-end="scale-0">
            <header class="flex items-center justify-between">
                <h2 class="font-semibold">{{$header}}</h2>
                <button class="focus:outline-none p-2" @click="showModal2 = false">
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </button>
            </header>
            <main class="">
                {{$slot}}
            </main> 
        </div>
    </div>
</div>