@extends('layout.app')

@section('title', 'Confirm-Password')

@section('content')
<div class="container-fluid vh-100 bg-light">
    <div class="row justify-content-center">
        <div class="col-12 card col-md-5 m-3 pb-3">
            <h3 class="card-header bg-white ps-0 mb-3">D2 LABORATORY</h3>
            <div class="mb-4 text-sm fw-bold">
                {{ __('Before getting started, could you verify your email address by clicking send verification email button below.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 alert alert-info">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
            @endif

            <div class="mt-4 d-flex align-items-center justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button class="btn btn-dark" type="submit"> {{ __('Send Verification Email') }}
                        </button>
                    </div>


                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="btn btn-dark" type="submit">{{ __('Log out') }}</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection