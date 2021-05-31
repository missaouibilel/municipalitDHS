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
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
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

        <!-- Prenom -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="prenom" value="{{ __('Prénom') }}" />
            <x-jet-input id="prenom" class="mt-1 block w-full" type="text" wire:model.defer="state.prenom" autocomplete="prenom" />
            <x-jet-input-error for="prenom" class="mt-2" />
        </div>
        <!-- CIN -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="CIN" value="{{ __('CIN') }}" />
            <x-jet-input id="CIN" class="mt-1 block w-full" type="text" wire:model.defer="state.CIN" autocomplete="CIN" />
            <x-jet-input-error for="CIN" class="mt-2" />
        </div>
        <!--Tel-->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tel" value="{{ __('Tel') }}" />
            <x-jet-input id="tel"  type="text" class="mt-1 block w-full" wire:model.defer="state.tel" autocomplete="tel" />
            <x-jet-input-error for="tel" class="mt-2" />
        </div>
        <!-- Adresse -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label  value="{{ __('Adresse') }}" />
           <select wire:model.defer="state.adresse" >
            <option>Mellita</option>
            <option> Hachène</option>
            <option>Fatou</option>
            <option>Mezraya</option>
            <option>Cedghiane</option>
            <option> Erriadh</option>
            <option> Oualegh</option>
            <option>Taourit</option>
            <option>Boumellel</option>
            <option>Essouani </option>
            <option> Ejjouamaâ</option>
           </select>
           <x-jet-input-error for="adresse" class="mt-2" />
        </div>
        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
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
