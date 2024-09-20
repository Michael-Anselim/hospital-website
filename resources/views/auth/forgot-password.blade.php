@extends('layout.app')

@section('title', 'Forgot-Password')

@section('content')
<div class="container-fluid vh-100">
    <div class="row p-4 justify-content-center">
        <div class="card col-12 col-12 col-md-6 col-sm-8 py-4">
            <div class="mb-4 text-sm fw-bold">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" :type="session('type')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <div class="d-flex align-items-center justify-content-end mt-4">
                        <button class="btn btn-primary" type="submit"> {{ __('Email Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection