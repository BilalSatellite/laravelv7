<x-app-layout>
        @section('title', 'My Profile')

<<<<<<< HEAD
    <div >
=======
    <div class="bg-smil2 dark:bg-smid3 dark:text-smid2 p-4 rounded-lg">
>>>>>>> 4e2f7f5a102a3a5e749d2f87937bd6997ceef0c5
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        <div class="mt-10 sm:mt-0">
                @livewire('profile.update-profile-information-form')

            </div>
                <x-jet-section-border/>
            @endif



          @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>




</x-app-layout>
