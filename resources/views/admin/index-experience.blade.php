<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Daftar Kepanitian/Volunteer/Dll</h2>
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
                    <x-th>Acara</x-th>
                    <x-th>Jabatan</x-th>
                    <x-th>Deskripsi</x-th>
                    <x-th>Tanggal</x-th>
                    <x-th>
                        Bukti
                    </x-th>
                    @if (Auth::user()->isAdmin())
                    <x-th>User</x-th>
                    @endif
                    <x-th>#</x-th>
                </tr>
            </thead>
            <tbody class="bg-gray-50">
                @foreach ($experiences as $item)
                <tr class="py-3 text-left">
                    <x-td>
                        {{$item->id ?? ''}}
                    </x-td>
                    <x-td> {{$item->event ?? '' }} </x-td>
                    <x-td> {{$item->position ?? '' }} </x-td>
                    <x-td> {{$item->description ?? '' }} </x-td>
                    <x-td> {{$item->tgl ?? '' }} </x-td>
                    <x-td> 
                        <img class="w-20 h-20 obejct-cover object-center rounded-2xl shadow-lg" src="{{asset('images/' . $item->image)}}" alt="Img" srcset="">
                    </x-td>
                    @if (Auth::user()->isAdmin())
                    <x-td>
                        {{
                        $item->user->name
                        }}
                    </x-td>
                    @endif
                    <td class="px-2 py-3 flex gap-2">
                        <a href="">
                            <x-button class="bg-yellow-600 text-gray-800" @click="showModal2 = true" field="button"
                                id="btn-edit" onclick="editMe(event, {{$item}})">
                                <i class="fa fa-pen text-white"></i>
                            </x-button>
                        </a>
                        <form action="{{route('experiences.destroy', $item)}}" method="post"
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
            Buat Hobi
        </x-slot>
        <form action="{{route('experiences.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-experience-create/>
            <div class="h-12 bg-green-500 my-2 overflow-hidden rounded-lg flex justify-center items-center">
                <x-button class="text-md font-bold w-full h-full text-center flex justify-center">Simpan</x-button>
            </div>
        </form>
    </x-modal.create>

    <x-modal.edit>
        <x-slot name="header">
            Edit Hobi
        </x-slot>
        <div id="modal-edit">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-experience-create/>
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
        document.querySelector('#modal-edit form').action = 'experiences/' + item.id
        document.querySelector('#modal-edit #event').value = item.event
        document.querySelector('#modal-edit #position').value = item.position
        document.querySelector('#modal-edit #description').value = item.description
        document.querySelector('#modal-edit #tgl').value = item.tgl
        document.querySelector('#modal-edit #image').value = item.image
    }
  
</script>