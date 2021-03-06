<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Daftar User</h2>
        </h2>
    </x-slot>
    <div class="py-2 text-left">
        <x-jet-button class="bg-green-600" @click="showModal1 = true">Tambah Data</x-jet-button>
    </div>
    <div class="flex justify-center rounded-lg">
        <table style="margin: 30px 0 rounded">
            <thead>
                <tr class="text-center">
                    <x-th>No</x-th>
                    <x-th>Avatar</x-th>
                    <x-th>Role</x-th>
                    <x-th>Name</x-th>
                    <x-th>Email</x-th>
                    <x-th>Telp</x-th>
                    <x-th>nama sekolah</x-th>
                    <x-th>jurusan</x-th>
                    <x-th>nilai rata-rata</x-th>
                    <x-th>tahun masuk</x-th>
                    <x-th>tahun keluar</x-th>
                    <x-th>#</x-th>
                </tr>
            </thead>
            <tbody class="bg-gray-50">
                @foreach ($users as $item)
                <tr class="py-3 text-center">
                    <td class="px-2 py-3">
                        {{$item->id ?? ''}}
                    </td>
                    <td>
                        <img class="w-10 h-10 shadow-md rounded-full border border-gray-300 border-2" src="{{$item->profile_photo_url}}" alt="Av" srcset="">
                    </td>
                    <td class="px-2 py-3">
                        {{$item->role ?? ''}}
                    </td>
                    <td class="px-2 py-3">
                        {{$item->name ?? ''}}
                    </td>
                    <td class="px-2 py-3">
                        {{$item->email ?? ''}}
                    </td>
                    </td>
                    <td class="px-2 py-3"> {{$item->profile->hp ?? '' }} </td>
                    <td class="px-2 py-3"> {{$item->profile->nama_sekolah ?? '' }} </td>
                    <td class="px-2 py-3"> {{$item->profile->jurusan ?? '' }} </td>
                    <td class="px-2 py-3"> {{$item->profile->nilai_rata ?? '' }} </td>
                    <td class="px-2 py-3"> {{$item->profile->tahun_masuk ?? '' }} </td>
                    <td class="px-2 py-3"> {{$item->profile->tahun_keluar ?? '' }} </td>
                    <td class="px-2 py-3 flex gap-2">
                        <a href="">
                            <x-button class="bg-yellow-600 text-gray-800" @click="showModal2 = true" field="button"
                                id="btn-edit" onclick="editMe(event, {{$item}})">
                                <i class="fa fa-pen text-white"></i>
                            </x-button>
                        </a>
                        <form action="{{route('users.delete', $item->id)}}" method="post"
                            onsubmit="return confirm('are you sure want to delete data')">
                            @csrf
                            @method('DELETE')
                            <x-button class="bg-red-600 text-gray-200">
                                <i class="fa fa-trash text-white"></i>
                            </x-button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <x-modal.create>
        <x-slot name="header">
            Buat User
        </x-slot>
        <form action="{{route('users')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-user-create />
            <div class="h-12 bg-green-500 my-2 overflow-hidden rounded-lg flex justify-center items-center">
                <x-button class="text-md font-bold w-full h-full text-center flex justify-center">Simpan</x-button>
            </div>
        </form>
    </x-modal.create>

    <x-modal.edit>
        <x-slot name="header">
            Edit User
        </x-slot>
        <div id="modal-edit">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
                <x-user-create />
                <div class="h-12 bg-green-500 my-2 overflow-hidden rounded-lg flex justify-center items-center">
                    <x-button class="text-md font-bold w-full h-full text-center flex justify-center">Simpan</x-button>
                </div>
            </form>
        </div>
    </x-modal.edit>

</x-app-layout>
<script>
    
        function editMe(e,item){
        e.preventDefault()
        console.log(item)
        document.querySelector('#modal-edit form').action = 'users/' + item.id
        document.querySelector('#modal-edit #name').value = item.name
        document.querySelector('#modal-edit #email').value = item.email
        document.querySelector('#modal-edit #nama_sekolah').value = item.profile?.nama_sekolah
        document.querySelector('#modal-edit #jurusan').value = item.profile?.jurusan
        document.querySelector('#modal-edit #nilai_rata').value = item.profile?.nilai_rata
        document.querySelector('#modal-edit #tahun_masuk').value = item.profile?.tahun_masuk
        document.querySelector('#modal-edit #tahun_keluar').value = item.profile?.tahun_keluar
        document.querySelector('#modal-edit #hp').value = item.profile?.hp
    }
  
</script>


