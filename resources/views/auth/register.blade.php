@extends('layout.app')

@section('title', 'Register')

@section('content')
    <div class="card p-4 col-12 mt-1 bg-white">
        <h3 class="fw-bold text-start text-md-center mt-2">Register a new user</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <!-- Title -->

                <div class="col-12 col-sm-6 mt-4">
                    <x-input-label :value="__('Title')" />
                    <div>
                        <x-radio-input id="title_mr" name="title" value="Mr" :checked="old('title') === 'Mr'" class="ms-0" required />
                        <x-input-label :value="'Mr'" for="title_mr" />

                        <x-radio-input id="title_mrs" name="title" value="Mrs" :checked="old('title') === 'Mrs'" class="ms-2" />
                        <x-input-label :value="'Mrs'" for="title_mrs" />

                        <x-radio-input id="title_miss" name="title" value="Miss" :checked="old('title') === 'Miss'" class="ms-2" />
                        <x-input-label :value="'Miss'" for="title_miss" />

                        <x-radio-input id="title_prof" name="title" value="Prof" :checked="old('title') === 'Prof'" class="ms-2" />
                        <x-input-label :value="'Prof'" for="title_prof" />

                        <x-radio-input id="title_dr" name="title" value="Dr" :checked="old('title') === 'Dr'" class="ms-2" />
                        <x-input-label :value="'Dr'" for="title_dr" />
                        <!-- Add more titles as needed -->
                    </div>
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
            </div>

            <div class="row">
                <!-- Email Address -->
                <div class="col-12 col-sm-6">
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-12 col-sm-6">
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" type="phone" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6">
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
            
            </div>

            <div class="d-flex align-items-center bg-white justify-content-end my-4">
                <button type="submit" class="btn btn-dark ms-3">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endsection