@extends('layout.app')

@section('title', 'Confirm-Password')

@section('content')
<div class="container-fluid vh-100 bg-light">
    <div class="row justify-content-center">
        <div class="col-12 card col-md-5 m-3 pb-3">
            <h3 class="card-header bg-white ps-0 mb-3">D2 LABORATORY</h3>
            <div class="mb-4 text-sm fw-bold">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" type="password" name="password" required
                        autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="d-flex align-items-center justify-content-end mt-4">
                    <button class="btn btn-dark" type="submit">{{ __('Confirm') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection