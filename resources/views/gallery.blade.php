@extends('layout.app')

@section('title', 'Gallery')

@section('content')
<section class="py-4">
    <div class="container">
        <x-auth-session-status class="mb-4" :status="session('status')"
            :type="session('type')" />
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <article class="mb-5">
                                    <figure class="mb-4">
                                        <img class="img-fluid" alt="background image"
                                            src="{{asset('images/services/radiology.jpg')}}">
                                        <figcaption class="mt-2">
                                            <h3><a href="#" class="text-cyan fw-bold">WORK WITH US</a></h3>
                                        </figcaption>
                                    </figure>

                                    <div>
                                        <p class="text-dark fs-5">
                                            RHOTIA Health Center is excited to offer internship opportunities for
                                            international students pursuing medicine or related fields. This program not
                                            only provides invaluable hands-on experience in a dynamic healthcare
                                            environment but also allows participants to immerse themselves in the local
                                            culture. Interns will have the chance to work alongside experienced
                                            professionals, gaining practical skills and insights into various medical
                                            practices.
                                        </p>
                                        <p class="text-dark fs-5">
                                            In addition to professional development, interns will explore the rich
                                            cultural heritage of the region, fostering personal growth and
                                            cross-cultural understanding. Participants will receive an official
                                            internship certificate upon completion, enhancing their professional
                                            credentials and setting them apart in their future careers. Join us at
                                            RHOTIA Health Center for a unique opportunity to grow both personally and
                                            professionally while making a meaningful impact in healthcare!
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Start Respond Form -->
                        <div class="row mt-5">
                            <div class="col-md-8">
                                <div id="respond">
                                    <h3 class="mb-4">Leave a Comment</h3>
                                    <form id="contactForm" action="{{ route('contact.send')}}" method="POST">
                                        @csrf
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
                                            <x-text-input id="subject" type="text" name="subject"
                                                :value="old('subject')" autocomplete="subject" />
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
                            </div>
                        </div>
                        <!-- End Respond Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection