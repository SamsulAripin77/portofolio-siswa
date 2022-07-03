<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="flex gap-4 flex-col md:flex-row">
                    <div class="rounded-lg shadow-md p-2 bg-yellow-700 text-gray-50">
                        <div class="flex gap-2 items-center">
                          <div>
                              <div class="text-md font-bold uppercase">Jumlah Siswa</div>
                              <h2 class="text-lg font-bold">5</h2>
                          </div>
                          <div>
                          <span class="bg-red-600">
                            <i class="fab fa-airbnb"></i>
                          </span>
                          </div>
                        </div>
                    </div>
                     <div class="rounded-lg shadow-md p-2 bg-yellow-700 text-gray-50">
                        <div class="flex gap-2 items-center">
                          <div>
                              <div class="text-md font-bold uppercase">Jumlah Siswa</div>
                              <h2 class="text-lg font-bold">5</h2>
                          </div>
                          <div>
                          <span class="bg-red-600">
                            <i class="fab fa-airbnb"></i>
                          </span>
                          </div>
                        </div>
                    </div>
                     <div class="rounded-lg shadow-md p-2 bg-yellow-700 text-gray-50">
                        <div class="flex gap-2 items-center">
                          <div>
                              <div class="text-md font-bold uppercase">Jumlah Siswa</div>
                              <h2 class="text-lg font-bold">5</h2>
                          </div>
                          <div>
                          <span class="bg-red-600">
                            <i class="fab fa-airbnb"></i>
                          </span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>