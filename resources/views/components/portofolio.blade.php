<div class="flex flex-col items-center gap-y-3 max-w-7xl">
    <img class="w-28 h-28 border-2 border-gray-400 rounded-full sahdow-lg object-cover object-center" src="{{Auth::user()->profile_photo_url ?? ''}}" alt="" srcset="">
    <h2 class="text-xl uppercase font-bold text-green-600">{{$user->name ?? ''}}</h2>
    <h2 class="text-md leading-relaxed uppercase font-light text-gray-900">Fresh Graduate</h2>
    <div class="flex border-y-2 border-gray-300">
        <div class="w-1/3 border-r-2 border-gray-300">
            <div class="border-b-2 border-gray-300 text-left py-2">
                <h2 class="text-md font-bold pl-2 pr-4 mb-2 text-green-500">
                    Personal Profile
                </h2>
                <p class="text-justify pl-2 pr-4 text-gray-800 text-sm">
                    {{$user->profile->about_me ?? ''}}
                </p>
            </div>
            <div class="py-2 text-left border-b-2 border-gray-300">
                <h2 class="text-md font-bold px-2 mb-2 text-green-500">
                    Education
                </h2>
                <div class="text-left px-2 mb-2">
                    <h2 class="text-gray-800 text-sm font-bold">{{$user->profile->tahun_masuk ?? ''}}-{{$user->profile->tahun_keluar ?? '' }}</h2>
                    <h2 class="text-gray-800 text-sm font-semibold">{{$user->profile->nama_sekolah ?? '' }}</h2>
                    <p class="text-justify text-gray-800 text-sm">
                        {{$user->profile->jurusan ?? ''}}
                    </p>
                </div>
            </div>
            <div class="py-2 text-left border-b-2 border-gray-300">
                <h2 class="text-md font-bold px-2 mb-2 text-green-500">
                    SKILL
                </h2>
                <ul class="px-2 text-sm font-semibold text-gray-800 list-disc list-inside">
                    @foreach ($user->skills as $item)
                        <li class="mb-2">{{$item->skill ?? ''}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="text-left py-2">
                <h2 class="text-md font-bold px-2 mb-2 text-green-500">
                    Contacts
                </h2>
                <div class="text-left px-2 mb-2">
                    <h2 class="text-gray-900 text-sm font-bold">Mail :</h2>
                    <h2 class="text-gray-600 text-sm font-bold">{{$user->email ?? ''}}</h2>
                </div>
                <div class="text-left px-2 mb-2">
                    <h2 class="text-gray-900 text-sm font-bold">Phone :</h2>
                    <h2 class="text-gray-600 text-sm font-bold">{{$user->profile->hp ?? '' }}</h2>
                </div>
                <div class="text-left px-2 mb-2">
                    <h2 class="text-gray-900 text-sm font-bold">Linkedin :</h2>
                    <h2 class="text-gray-600 text-sm font-bold"><a href="{{$user->profile->url_linkedin ?? ''}}">
                        {{$user->profile->uname_linkedin ?? ''}}
                    </a></h2>
                </div>
            </div>
        </div>
        <div class="w-2/3 px-8">
            <div class="text-left py-2 mb-1">
                <h2 class="text-lg font-bold mb-2 text-green-500">
                    Works/Internships
                </h2>
                @foreach ($user->works as $item)
                <div class="text-left mb-2">
                    <h2 class="text-sm font-bold">{{$item->position ?? ''}}</h2>
                    <h2 class="text-gray-800 text-sm font-light italic">{{$item->company ?? ''}} . <span>{{$item->tgl_start}}-{{$item->tgl_end}}</span></h2>
                </div>
                @endforeach
            </div>
            <div class="text-left py-2 mb-2">
                <h2 class="text-lg font-bold mb-2 text-green-500">
                    Organizations
                </h2>
                @foreach ($user->organizations as $item)
                    <div class="text-left mb-2">
                        <h2 class="text-sm font-bold mb-1">{{$item->name ?? ''}} ( {{$item->thn_mulai ?? ''}}-{{$item->thn_akhir ?? ''}} )</h2>
                        <h2 class="text-gray-800 text-sm font-light italic mb-1">{{$item->position ?? ''}}</h2>
                    </div>
                @endforeach
            </div>
            <div class="text-left py-2 mb-2">
                <h2 class="text-lg font-bold mb-2 text-green-500">
                    Sertifications
                </h2>
                @foreach ($user->sertifications as $item)
                    <div class="text-left mb-2">
                        <h2 class="text-sm font-bold mb-1">{{$item->title ?? ''}}</h2>
                        <h2 class="text-gray-800 text-sm font-light italic mb-1">{{$item->description ?? ''}}</h2>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>