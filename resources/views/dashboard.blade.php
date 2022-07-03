<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-4 lg:px-8">
            <div class="flex pb-4 justify-end"><a href="{{route('users.portofolio')}}" target="_blank" class="px-2 lg:px-4 py-2 text-gray-200 rounded-lg bg-green-600 text-lg font-bold">Print</a></div>
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <x-portofolio/>
            </div>
        </div>
    </div>
</x-app-layout>
