@props(['type' => 'text', 'id' => '', 'name' => '', 'value' => '', 'autocomplete' => '', 'placeholder'=>''])

@php
    $classes = 'form-control';
    if ($errors->has($name)) {
        $classes .= ' is-invalid';
    }
@endphp

<input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{$placeholder}}" autocomplete="{{$autocomplete}}" class="{{ $classes }}" autofocus>
