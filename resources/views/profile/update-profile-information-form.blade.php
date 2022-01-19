<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="hp" value="{{ __('Hp') }}" />
            <x-jet-input id="hp" type="text"  class="mt-1 block w-full" name="hp" wire:model.defer="state.hp" />
            <x-jet-input-error for="hp" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='url_linkedin' value="{{ __('url_linkedin') }}" />
            <x-jet-input id='url_linkedin' placeholder='url_linkedin' type="text"  class="mt-1 block w-full" name='url_linkedin' wire:model.defer="state.url_linkedin" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='uname_linkedin' value="{{ __('uname_linkedin') }}" />
            <x-jet-input id='uname_linkedin' placeholder='uname_linkedin' type="text"  class="mt-1 block w-full" name='uname_linkedin' wire:model.defer="state.uname_linkedin" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='address' value="{{ __('address') }}" />
            <x-jet-input id='address' placeholder='address' type="text"  class="mt-1 block w-full" name='address' wire:model.defer="state.address" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='about_me' value="{{ __('about_me') }}" />
            <x-jet-input id='about_me' placeholder='about_me' type="text"  class="mt-1 block w-full" name='about_me' wire:model.defer="state.about_me" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='nama_sekolah' value="{{ __('nama_sekolah') }}" />
            <x-jet-input id='nama_sekolah' placeholder='nama_sekolah' type="text"  class="mt-1 block w-full" name='nama_sekolah' wire:model.defer="state.nama_sekolah" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='jurusan' value="{{ __('jurusan') }}" />
            <x-jet-input id='jurusan' placeholder='jurusan' type="text"  class="mt-1 block w-full" name='jurusan' wire:model.defer="state.jurusan" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='nilai_rata' value="{{ __('nilai_rata') }}" />
            <x-jet-input id='nilai_rata' placeholder='nilai_rata' type="text"  class="mt-1 block w-full" name='nilai_rata' wire:model.defer="state.nilai_rata" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='tahun_masuk' value="{{ __('tahun_masuk') }}" />
            <x-jet-input id='tahun_masuk' placeholder='tahun_masuk' type="text"  class="mt-1 block w-full" name='tahun_masuk' wire:model.defer="state.tahun_masuk" />
            <x-jet-input-error for= class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for='tahun_keluar' value="{{ __('tahun_keluar') }}" />
            <x-jet-input id='tahun_keluar' placeholder='tahun_keluar' type="text"  class="mt-1 block w-full" name='tahun_keluar' wire:model.defer="state.tahun_keluar" />
            <x-jet-input-error for= class="mt-2" />
        </div>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
