@props(['for' => '', 'value' => ''])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'form-label']) }}>
    {{ $value }}
</label>
