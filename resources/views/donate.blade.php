@extends('layout.app')

@section('title','Donate')

@section('content')

<section class="py-4">
    <div class="container">
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
                                            <h3><a href="#" class="text-cyan fw-bold">DONATION</a></h3>
                                        </figcaption>
                                    </figure>

                                    <div>
                                        <h5 class="text-cyan">THE RECONSTRUCTION OF THE OUTPATIENT DEPARTMENT (OPD)</h5>
                                        <p class="text-dark fs-5">
                                            Rhotia Health Center has been a vital provider of healthcare services in
                                            Arusha, Tanzania, dedicated to improving the health and wellbeing of our
                                            community. However, the increasing patient load and the limitations of our
                                            current Outpatient Department (OPD) have underscored the urgent need for an
                                            extensive upgrade. This proposal outlines our plan to reconstruct and expand
                                            the OPD, transforming it into a facility capable of providing hospital level
                                            care. This initiative aims to enhance our service delivery, ensuring that we
                                            meet the diverse healthcare needs of our population effectively.
                                        </p>
                                        <h5 class="text-cyan">PROJECT OBJECTIVES</h5>
                                        <ol>
                                            <li class="fs-5">
                                                <span class="fw-bold">Increase Patient Capacity:</span> The current OPD
                                                is constrained in its
                                                ability to accommodate patients, resulting in long wait times. Our
                                                objective is to expand the facility, enabling us to serve a
                                                significantly larger patient population.
                                            </li>
                                            <li class="fs-5">
                                                <span class="fw-bold">Enhance Patient Care:</span> A modernized OPD will
                                                facilitate a more
                                                efficient and patient centered approach to care, fostering an
                                                environment that promotes positive health outcomes
                                            </li>
                                            <li class="fs-5">
                                                <span class="fw-bold">Improve Accessibility:</span> The redesigned OPD
                                                will ensure equitable
                                                access to healthcare services for all community members, including
                                                individuals with disabilities and the elderly.
                                            </li>
                                            <li class="fs-5">
                                                <span class="fw-bold">Achieve Hospital Level Standards:</span> By
                                                upgrading our facilities and
                                                services, Rhotia Health Center will elevate its operational standards to
                                                those of a hospital, enabling us to provide a broader spectrum of
                                                medical care, including emergency services and specialized treatments.
                                            </li>
                                        </ol>
                                        <h5 class="text-cyan">BUDGET ESTIMATE</h5>
                                        <p class="text-dark fs-5">
                                            The total estimated cost for the reconstruction of the OPD is $100,000. We
                                            are actively seeking funding through sponsorship and contributions to
                                            support this transformative initiative. By investing in this project, you
                                            will play a vital role in enhancing healthcare access and quality for
                                            countless individuals in the community. We believe that this project
                                            represents a unique opportunity to make a significant impact on public
                                            health. A detailed budget breakdown will be provided upon request.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="container d-flex justify-content-center align-items-center vh-100">
                            <div class="card text-center shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                                <div class="card-body">
                                    <h5 class="card-title">Help Us Reach Our Goal</h5>
                                    <table class="table table-bordered  table-light table-striped table-hover mt-4">
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold">RAISED</td>
                                                <td>$5,000</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">GOAL</td>
                                                <td>$100,000</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold">DONATIONS</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <h5 class="text-cyan">
                                    Donate Now by Emailing Us
                                    </h5>
                                    <p class="fw-bold">If you're interested in contributing to help us reach our goal, please email us
                                        to get more information on how you can donate. We appreciate your support!</p>
                                    <a href="mailto:rhotiahealthcentre@gmail.com"
                                        class="btn bg-donate btn-lg fw-bold text-dark btn-outline-success">Email Us
                                        Now</a>
                                </div>
                            </div>
                        </div>

                        <!-- Start Respond Form -->
                        <div class="row mt-5">
                            <div class="col-md-8">
                                <div id="respond">
                                    <h3 class="mb-4">Leave a Comment</h3>
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