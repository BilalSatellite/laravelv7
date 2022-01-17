@props(['submit'])

<<<<<<< HEAD
<div {{ $attributes->merge(['class' => 'md:grid md:grid-cols-3 md:gap-6']) }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>
=======
<section {{ $attributes->merge(['class' => '']) }}>
    <!-- Heading -->
    <div class="">
        <!-- Content -->
        <x-jet-section-title>
            <div class="flex flex-1 flex-col items-center lg:items-start ">
                <h2 class="text-xl  text-center mb-1">
                    <x-slot name="title">{{ $title }}</x-slot>
                </h2>
                <p class=" text-center mb-2">
                    <x-slot name="description">{{ $description }}</x-slot>
                </p>
>>>>>>> 4e2f7f5a102a3a5e749d2f87937bd6997ceef0c5

    <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="{{ $submit }}">
            <div class="px-4 py-5  sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="grid grid-cols-6 gap-6">
                    {{ $form }}
                </div>
            </div>
<<<<<<< HEAD
=======
        </x-jet-section-title>
    </div>
    <form wire:submit.prevent="{{ $submit }}">
        <div class=" {{ isset($actions) ? ' ' : '' }}">
            <div class="">
                {{ $form }}
            </div>
        </div>
>>>>>>> 4e2f7f5a102a3a5e749d2f87937bd6997ceef0c5

            @if (isset($actions))
                <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
