@extends('layout.app')

@section('title','About')

@section('content')

<section class="py-4">
    <div class="container">
        <x-auth-session-status class="mb-4" :status="session('status')" :type="session('type')" />
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <article class="mb-5">
                                    <figure class="mb-4">
                                        <img class="img-fluid" alt="background image" src="{{asset('images/services/radiology.jpg')}}">
                                        <figcaption class="mt-2">
                                            <h3><a href="#" class="text-cyan fw-bold">BACKGROUND</a></h3>
                                        </figcaption>
                                    </figure>

                                    <div>
                                        <p class="text-dark fs-5">
                                            The Baldegger Sisters have been dedicated to serving the people of Tanzania since 1921,
                                            marking a century of commitment with the involvement of 126 sisters in various mission
                                            projects. Guided by the spirituality of St. Francis of Assisi, their efforts encompass both
                                            social initiatives and the development of the local church.
                                        </p>
                                        <p class="text-dark fs-5">
                                            In 1978, Sisters Clementina Bütler and Erika Lischer established a first aid post in Rhotia,
                                            initially living alongside the Capuchin brothers. As their mission expanded, they built a
                                            mud house and later a dedicated sisters' residence. Sister Ruth Gasche joined them in 1980,
                                            enhancing their community efforts.
                                        </p>
                                        <p class="text-dark fs-5">
                                            By 1987, Sister Verona Hutter arrived to take over the health center, focusing on training
                                            local women as nurses and midwives. Alongside Sister Blasia Zielmann, who joined in 1988,
                                            they transformed the first aid post into a fully-fledged health center by 1997, which
                                            included inpatient services. Their dedication extended to caring for marginalized
                                            populations, including those with disabilities.
                                        </p>
                                        <p class="text-dark fs-5">
                                            The Rhotia Health Centre has consistently provided vital medical care, treating all patients
                                            regardless of their ability to pay. The center now serves around 20,000 patients annually,
                                            addressing major health issues such as malaria, tuberculosis, and maternal care. The sisters
                                            also established a vehicle service for patient transport, vital for timely medical
                                            interventions.
                                        </p>
                                        <p class="text-dark fs-5">
                                            In 2016, the Mahenge Sisters were invited to take over the management of the center. After
                                            the passing of Sister Verona in 2016 and Sister Blasia in 2022, the Mahenge Sisters
                                            continued the legacy of compassionate care established by their predecessors. Under the
                                            leadership of Sister Prisila and Sister Floriana, the center maintains its commitment to
                                            equitable healthcare, relying on donations and government support to serve the community
                                            effectively.
                                        </p>
                                        <p class="text-dark fs-5">
                                            The Rhotia Health Centre embodies the spirit of the Baldegger Sisters, where care,
                                            compassion, and community support create a safe haven for the region's most vulnerable
                                            populations.
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
                                            <x-text-input id="name" type="text" name="name" :value="old('name')" autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                        </div>
                                        <div class="form-group mt-3">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" type="email" name="email" :value="old('email')" autocomplete="email" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <div class="form-group mt-3">
                                            <x-input-label for="subject" :value="__('Subject')" />
                                            <x-text-input id="subject" type="text" name="subject" :value="old('subject')" autocomplete="subject" />
                                            <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                        </div>
                                        <div class="form-group mt-3">
                                            <x-input-label for="message" :value="__('Message')" />
                                            <x-text-area-input id="message" name="message" type="text" />
                                        </div>
                                        <div class="my-3">
                                            <button type="submit" class="btn btn-outline-success" id="submitBtn">Send Message</button>
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