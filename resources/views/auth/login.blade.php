@extends('layout.app')

@section('title', 'Login')

@section('content')


<!-- Full height container to center the content -->
<div class="container">
    
    <div class="row p-4 justify-content-center">
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" :type="session('type')" />
        <!-- End Session Status -->
        <div class="card col-12 col-md-6 col-sm-8">
            <div class="col-12 py-4">
                <form method="POST" action="{{ route('login.store') }}">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')"
                            autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group mb-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" type="password" name="password" autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="d-block mb-4">
                        <label for="remember_me" class="d-inline-flex align-items-center">
                            <input id="remember_me" type="checkbox" class="form-check-control" name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="d-flex align-items-center justify-content-end mb-4">
                        @if (Route::has('password.request'))
                        <a class="text-decoration-underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <button type="submit" class="btn btn-primary ms-3">
                            {{ __('Log in') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection