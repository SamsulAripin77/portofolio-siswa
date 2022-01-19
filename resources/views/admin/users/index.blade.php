<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Daftar User</h2>
        </h2>
    </x-slot>
    <div class="flex justify-center rounded-lg">
        <table style="margin: 30px 0 rounded">
            <thead>
                <tr class="text-center">
                    <td class="py-3 px-3 bg-gray-200">No</td>
                    <td class="py-3 px-3 bg-gray-200">Name</td>
                    <td class="py-3 px-3 bg-gray-200">Email</td>
                    <td class="py-3 px-3 bg-gray-200">Telp</td>
                    <td class="py-3 px-3 bg-gray-200">username linkedin</td>
                    <td class="py-3 px-3 bg-gray-200">address</td>
                    <td class="py-3 px-3 bg-gray-200">about</td>
                    <td class="py-3 px-3 bg-gray-200">nama sekolah</td>
                    <td class="py-3 px-3 bg-gray-200">jurusan</td>
                    <td class="py-3 px-3 bg-gray-200">nilai rata-rata</td>
                    <td class="py-3 px-3 bg-gray-200">tahun masuk</td>
                    <td class="py-3 px-3 bg-gray-200">tahun keluar</td>
                    <td class="py-3 px-3 bg-gray-200">#</td>
                </tr>
            </thead>
            <tbody class="bg-gray-100">
                @foreach ($users as $item)
                    <tr>
                        <td class="px-2 py-3">
                            {{$item->id ?? ''}}
                        </td>
                        <td class="px-2 py-3">
                            {{$item->name ?? ''}}
                        </td>
                        <td class="px-2 py-3">
                            {{$item->email ?? ''}}
                        </td>
                        </td>
                        <td> {{$item->profile->hp ?? '' }}</td>
                        <td> {{$item->profile->uname_linkedin ?? '' }}</td>
                        <td> {{$item->profile->address ?? '' }}</td>
                        <td> {{$item->profile->about_me ?? '' }}</td>
                        <td> {{$item->profile->nama_sekolah ?? '' }}</td>
                        <td> {{$item->profile->jurusan ?? '' }}</td>
                        <td> {{$item->profile->nilai_rata ?? '' }}</td>
                        <td> {{$item->profile->tahun_masuk ?? '' }}</td>
                        <td> {{$item->profile->tahun_keluar ?? '' }}</td>

                        <td class="px-2 py-3 flex gap-2">
                            <x-button class="bg-yellow-600 text-gray-800">
                               <i class="fa fa-pen text-white"></i>
                            </x-button>
                            <x-button class="bg-red-600 text-gray-200">
                                <i class="fa fa-trash text-white"></i>
                            </x-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>        
    </div>
</x-app-layout>