@props(['submit'])

<section {{ $attributes->merge(['class' => 'draklightbg1  draklighttext']) }}>
    <!-- Heading -->
    <div class=" draklightbg1 draklighttext">
        <!-- Content -->
        <x-jet-section-title>
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <h2 class="text-xl  text-center mb-1">
                    <x-slot name="title">{{ $title }}</x-slot>
                </h2>
                <p class=" text-center mb-2">
                    <x-slot name="description">{{ $description }}</x-slot>
                </p>

            </div>
        </x-jet-section-title>
    </div>
    <form wire:submit.prevent="{{ $submit }}">
        <div class=" {{ isset($actions) ? '' : '' }}">
            <div class="">
                {{ $form }}
            </div>
        </div>

        @if (isset($actions))
        <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
            {{ $actions }}
        </div>
    @endif
    </form>
</section>
