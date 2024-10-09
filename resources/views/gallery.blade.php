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

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection