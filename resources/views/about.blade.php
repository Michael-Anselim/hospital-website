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
                                        <img class="img-fluid" alt="background image" src="{{asset('images/background.webp')}}">
                                        <figcaption class="mt-2">
                                            <h3><a href="#" class="text-cyan fw-bold">BACKGROUND</a></h3>
                                        </figcaption>
                                    </figure>

                                    <div>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            The Baldegger Sisters have been dedicated to serving the people of Tanzania since 1921,
                                            marking a century of commitment with the involvement of 126 sisters in various mission
                                            projects. Guided by the spirituality of St. Francis of Assisi, their efforts encompass both
                                            social initiatives and the development of the local church.
                                        </p>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            In 1978, Sisters Clementina Bütler and Erika Lischer established a first aid post in Rhotia,
                                            initially living alongside the Capuchin brothers. As their mission expanded, they built a
                                            mud house and later a dedicated sisters' residence. Sister Ruth Gasche joined them in 1980,
                                            enhancing their community efforts.
                                        </p>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            By 1987, Sister Verona Hutter arrived to take over the health center, focusing on training
                                            local women as nurses and midwives. Alongside Sister Blasia Zielmann, who joined in 1988,
                                            they transformed the first aid post into a fully-fledged health center by 1997, which
                                            included inpatient services. Their dedication extended to caring for marginalized
                                            populations, including those with disabilities.
                                        </p>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            The Rhotia Health Centre has consistently provided vital medical care, treating all patients
                                            regardless of their ability to pay. The center now serves around 20,000 patients annually,
                                            addressing major health issues such as malaria, tuberculosis, and maternal care. The sisters
                                            also established a vehicle service for patient transport, vital for timely medical
                                            interventions.
                                        </p>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            In 2017, the Mahenge Sisters were invited to take over the management of the center. After
                                            the passing of Sister Verona in 2016 and Sister Blasia in 2022, the Mahenge Sisters
                                            continued the legacy of compassionate care established by their predecessors. Under the
                                            leadership of Sister Prisila and Sister Floriana, the center maintains its commitment to
                                            equitable healthcare, relying on donations and government support to serve the community
                                            effectively.
                                        </p>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            The Rhotia Health Centre embodies the spirit of the Baldegger Sisters, where care,
                                            compassion, and community support create a safe haven for the region's most vulnerable
                                            populations.
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