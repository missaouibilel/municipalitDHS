<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div>
                <x-jet-label for="prenom" value="{{ __('Prénom') }}" />
                <x-jet-input id="prenom" class="block mt-1 w-full" type="tel" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
            </div>

            <div>
                <x-jet-label for="CIN" value="{{ __('CIN') }}" />
                <x-jet-input id="CIN" class="block mt-1 w-full" type="text" name="CIN" :value="old('CIN')"  pattern="[0-9]{8}" required autofocus autocomplete="CIN" />
            </div>

            <div>
                <x-jet-label for="tel" value="{{ __('Tel') }}" />
                <x-jet-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')"  pattern="[0-9]{8}" required autofocus autocomplete="tel" />
            </div>

            <div>
                <x-jet-label  value="{{ __('Adresse') }}" />
               <select name="adresse">
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
            </div>


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Déjà enregistré?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
