<!-- resources/views/components/textarea.blade.php -->
@props(['name', 'rows' => 5, 'cols' => 50])

<textarea 
    id="{{ $name }}" 
    name="{{ $name }}" 
    rows="{{ $rows }}" 
    cols="{{ $cols }}"
    {{ $attributes->merge(['class' => 'form-control']) }}
>{{ $slot }}</textarea>
