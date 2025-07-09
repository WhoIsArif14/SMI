@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-blue-800 dark:text-blue-200']) }}>
    {{ $value ?? $slot }}
</label>
