@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'invalid-feedback fw-bold']) }}>
        @foreach ((array) $messages as $message)
            <p class="fw-bold text-danger">{{ $message }}</p>
        @endforeach
    </div>
@endif
