<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h2>Daftar Organisasi</h2>
        </h2>
    </x-slot>
    <div class="py-2 text-right">
        @if (! Auth::user()->isAdmin())
            <x-jet-button class="bg-green-600" @click="showModal1 = true">Tambah Data</x-jet-button>
        @endif
    </div>
    <div class="flex justify-center bg-white shadow-lg rounded-lg">
        <table class="w-full rounded">
            <thead>
                <tr class="text-left">
                    <x-th class="hidden lg:block">No</x-th>
                    <x-th>Nama</x-th>
                    <x-th class="hidden lg:block">position</x-th>
                    <x-th class="hidden lg:block">tahun mulai</x-th>
                    <x-th class="hidden lg:block">tahun selesai</x-th>
                    <x-th>Bukti</x-th>
                    @if (Auth::user()->isAdmin())
                    <x-th>User</x-th>
                    @endif
                    <x-th>#</x-th>
                </tr>
            </thead>
            <tbody class="bg-gray-50">
                @foreach ($organizations as $item)
                <tr class="py-3 text-left">
                    <x-td class="hidden lg:block">
                        {{$item->id ?? ''}}
                    </x-td>
                    <x-td> {{$item->name ?? '' }} </x-td>
                    <x-td class="hidden lg:block" > {{$item->positon ?? ''}}</x-td>
                    <x-td class="hidden lg:block" > {{$item->thn_mulai ?? ''}}</x-td>
                    <x-td class="hidden lg:block" > {{$item->thn_akhir ?? ''}} </x-td>
                    <x-td> <a href="{{asset('images/' . $item->image)}}" data-fancybox>File</a> </x-td>
                    @if (Auth::user()->isAdmin())
                    <x-td class="hidden lg:block">
                        {{
                        $item->user->name
                        }}
                    </x-td>
                    @endif
                    <td class="px-2 py-3 flex gap-2">
                        @if (Auth::user()->isAdmin())
                        <a href="{{route('organization.validation', [$item,$item->validation])}}">
                            <x-button class="bg-green-600 text-white" type="submit" field="button"
                                id="btn-edit">
                                @if ($item->validation)
                                <i class="fas fa-thumbs-up text-white"></i>
                                @else
                                <i class="fas fa-thumbs-down text-white"></i>
                                @endif
                            </x-button>
                        </a>
                        @endif
                        <a href="">
                            <x-button class="bg-yellow-600 text-gray-800" @click="showModal2 = true" field="button"
                                id="btn-edit" onclick="editMe(event, {{$item}})">
                                <i class="fa fa-pen text-white"></i>
                            </x-button>
                        </a>
                        <form action="{{route('organizations.destroy', $item)}}" method="post"
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
            Buat Organisasi
        </x-slot>
        <form action="{{route('organizations.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-organization-create/>
            <div class="h-12 bg-green-500 my-2 overflow-hidden rounded-lg flex justify-center items-center">
                <x-button class="text-md font-bold w-full h-full text-center flex justify-center">Simpan</x-button>
            </div>
        </form>
    </x-modal.create>

    <x-modal.edit>
        <x-slot name="header">
            Edit Organisasi
        </x-slot>
        <div id="modal-edit">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-organization-create/>
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
        document.querySelector('#modal-edit form').action = 'organizations/' + item.id
        document.querySelector('#modal-edit #name').value = item.name
        document.querySelector('#modal-edit #position').value = item.position
        document.querySelector('#modal-edit #thn_mulai').value = item.thn_mulai
        document.querySelector('#modal-edit #thn_akhir').value = item.thn_akhir
        document.querySelector('#modal-edit #image').value = item.image
    }
  
</script>