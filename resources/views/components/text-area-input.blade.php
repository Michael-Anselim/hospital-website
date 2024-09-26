@props(['type' => 'text', 'id' => '', 'name' => '', 'value' => '', 'autocomplete' => '', 'placeholder'=>''])

@php
$classes = 'form-control';
if ($errors->has($name)) {
$classes .= ' is-invalid';
}
@endphp

<textarea type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{$placeholder}}" autocomplete="{{$autocomplete}}" class="{{ $classes }}" rows="4" cols="45">
</textarea>