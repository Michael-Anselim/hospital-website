@extends('layout.app')

@section('title','Home')

@section('content')

<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel"
                    data-bs-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/slide/1.png') }}" class="carousel-image img-fluid" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/2.png') }}" class="carousel-image img-fluid" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/slide/4.jpg') }}" class="carousel-image img-fluid" alt="...">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Welcome to Rhotia Health Centre</h2>
                <p class="mb-0 text-dark fs-5" style="text-align: justify;">Welcome to Rhotia Health Centre, a
                    faith-based facility under the catholic diocese of Mbulu, dedicated to uplifting the health and
                    well-being of the underserved communities in Karatu, Arusha, Tanzania. Our mission is rooted in
                    compassion and service, focusing on providing accessible, quality healthcare to those in need,
                    especially those facing economic challenges. We emphasize health education and support, empowering
                    individuals and families to make informed decisions about their well-being. Our programs are
                    designed to address the specific needs of low-income families, ensuring that everyone, regardless of
                    their financial situation, has access to the care they deserve. At Rhotia health Centre, we believe
                    in treating the whole person—body, mind, and spirit—while fostering a sense of community and hope.
                    Join us in our mission to bring health and healing to those who need it most. Together, we can make
                    a difference in the lives of many</p>

            </div>

        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Our Mission</h5>

                        <p class="fw-bold">To embrace the healing mission of JESUS, the
                            Divine Healer and to show a firm solidarity with those deprived to Health Care
                            and the marganalized so as to bring about an intergrated humnaity through health
                            services.
                        </p>
                    </div>
                </div>
            </div>



            <div class="col-12 col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="mb-3">Our Vision</h5>

                        <p class="fw-bold mb-4">
                            To Provide Quality Health Services Through Carring And Being Responsible To Further The
                            Ministry Of Jesus Christ To The Family Of God.
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-3">Our Core Values</h5>

                        <p class="fw-bold">Quality, Accessibility/Availability and transaparency of Health
                            Proffession adhering to Ethical code of conduct and providing confirting services to all
                            the needs, No practice of Bribery neither Corruption.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>GET INVOLVED WITH US</h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/group-african-kids-paying-attention-class.jpg') }}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">OUR SERVICES</h5>

                            <p>
                            <ul>
                                <li>OPD Services</li>
                                <li>IPD Services</li>
                                <li> Laboratory Services</li>
                                <li> Radiology Services</li>
                                <li> RCH Services</li>
                                <li>CTC Ser>vices</li>
                                <li>DENTAL Services</li>
                                <li> SURGICAL Services</li>
                                <li> Major and Minor Proceures</li>
                            </ul>
                            </p>

                            <div class="progress mt-4">
                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <a href="{{route('services')}}" class="custom-btn btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/poor-child-landfill-looks-forward-with-hope.jpg') }}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">WORK WITH US</h5>

                            <p>RHOTIA Health Center is excited to offer internship opportunities for international
                                students pursuing medicine or related fields. This program not only provides invaluable
                                hands-on experience in a dynamic healthcare environment but also allows participants to
                                immerse themselves in....</p>

                            <div class="progress mt-4">
                                <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <a href="{{route('gallery')}}" class="custom-btn btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/african-woman-pouring-water-recipient-outdoors.jpg') }}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">DONATE</h5>

                            <p>We invite you to join us in supporting an exciting initiative at RHOTIA Health Center
                                that aims to enhance our community’s healthcare services. Our ongoing project focuses on
                                expanding access to essential medical resources and improving patient care, but we need
                                your help to make it a reality. Your contributions will..</p>

                            <div class="progress mt-4">
                                <div class="progress-bar w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <a href="{{ route('donate') }}" class="custom-btn btn">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 ms-auto">
                <h2 class="mb-0">Make an impact. <br> Save lives.</h2>
            </div>

            <div class="col-lg-5 col-12">
                <a href="{{ route('donate') }}" class="me-4 text-primary">Make a donation</a>
                <a href="{{ route('volunteer') }}" class="me-4 text-primary">Become a volunteer</a>
            </div>

        </div>
    </div>
</section>


<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center mb-4">
                <h2>OUR LEADERS</h2>
            </div>

            <div class="col-md-3 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img  src="{{ asset('images/leaders/bishop.jpg') }}" class="custom-block-image img-fluid"
                        alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Bishop Anthony Lagwen</h5>

                            <p>Bishop dioces of Mbulu</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12 mb-4 mb-lg-0">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/poor-child-landfill-looks-forward-with-hope.jpg') }}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">
                                Sr. Prisila E. Lyangan
                            </h5>

                            <p>Director</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/african-woman-pouring-water-recipient-outdoors.jpg') }}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Dr. Rozina J. Hangu</h5>

                            <p>Medical Officer In Charge</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-12">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/causes/african-woman-pouring-water-recipient-outdoors.jpg') }}"
                        class="custom-block-image img-fluid" alt="">

                    <div class="custom-block">
                        <div class="custom-block-body">
                            <h5 class="mb-3">Yohan Stanley</h5>

                            <p>Health Secretary</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection