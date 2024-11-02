@extends('layout.app')

@section('title','Contacts')

@section('content')

<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <!-- start title -->
                    <div class="mt-4">
                      <center>  <h3 class="text-cyan fw-bold">Get in Touch</h3> </center>
                        <p class="text-dark fs-5">
                            Thank you for visiting our website! If you have any questions or need assistance, please
                            feel free to reach out to us using the contact form below, and we'll respond promptly.
                        </p>
                    </div>
                    <!-- end title -->
                    <!-- start contact content -->
                    <div class="container">
                        <div class="row my-4 py-4">
                            <div class="col-md-6">
                                <form id="contactForm" action="{{ route('contact.send')}}" method="POST">
                                    @csrf
                                    <x-auth-session-status class="mb-4" :status="session('status')"
                                        :type="session('type')" />
                                    <div class="form-group mt-3">
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" type="text" name="name" :value="old('name')"
                                            autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                    </div>
                                    <div class="form-group mt-3">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" type="email" name="email" :value="old('email')"
                                            autocomplete="email" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-group mt-3">
                                        <x-input-label for="subject" :value="__('Subject')" />
                                        <x-text-input id="subject" type="text" name="subject" :value="old('subject')"
                                            autocomplete="subject" />
                                        <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                    </div>
                                    <div class="form-group mt-3">
                                        <x-input-label for="message" :value="__('Message')" />
                                        <x-text-area-input id="message" name="message" type="text" />
                                    </div>
                                    <div class="my-3">
                                        <button type="submit" class="btn btn-outline-success" id="submitBtn">Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6" id="map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15932.636284630053!2d35.737693!3d-3.310809!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18343d04a42af821%3A0x9e2923290b9f2b07!2sRhotia%20Health%20Center!5e0!3m2!1ssw!2stz!4v1726954027676!5m2!1ssw!2stz"
                                    width="600" height="450" style="border: 0" allowfullscreen="false" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- end contact content -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection