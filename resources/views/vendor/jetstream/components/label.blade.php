@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-skin-titel']) }}>
    {{ $value ?? $slot }}
</label>
