@extends('layout.app')

@section('title','Volunteer')

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
                                            src="{{asset('images/volunteer.webp')}}" width="100%">
                                        <figcaption class="mt-2">
                                            <h3><a href="#" class="fw-bold text-cyan">VOLUNTEER</a></h3>
                                        </figcaption>
                                    </figure>

                                    <div>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            RHOTIA Health Center is thrilled to announce exciting internship
                                            opportunities for international students pursuing degrees in medicine or
                                            related fields. This program is designed to provide participants with
                                            invaluable hands-on experience in a dynamic and supportive healthcare
                                            environment while also offering a unique opportunity to immerse themselves
                                            in the vibrant local culture of our community.
                                        </p>
                                        <h4 class="text-cyan">Hands-On Experience</h4>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            Interns will have the opportunity to engage in various clinical activities,
                                            observing and assisting in patient assessments, treatments, and follow-up
                                            care. This hands-on experience is crucial for developing essential skills
                                            and gaining insights into the complexities of healthcare delivery. Interns
                                            will be exposed to a variety of medical specialties, allowing them to
                                            broaden their understanding of different practices and approaches to patient
                                            care.
                                        </p>
                                        <h4 class="text-cyan">Cultural Immersion</h4>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            In addition to gaining professional experience, interns will have the chance
                                            to immerse themselves in the rich local culture of the area. Living and
                                            working in this vibrant community will provide a unique perspective on
                                            healthcare challenges and practices in a different context. Interns will
                                            have opportunities to participate in local events, explore the natural
                                            beauty of the region, and interact with residents, enhancing their cultural
                                            competence and understanding of global health issues.
                                        </p>
                                        <h4 class="text-cyan">Professional Development</h4>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            Throughout the internship, participants will engage in structured learning
                                            experiences, including workshops, seminars, and case discussions led by
                                            experienced healthcare professionals. This comprehensive approach not only
                                            enhances clinical skills but also fosters critical thinking, communication,
                                            and teamwork—essential competencies for any healthcare career.
                                        </p>
                                        <h4 class="text-cyan">Networking Opportunities</h4>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            The internship program at RHOTIA Health Center offers a unique platform for
                                            building professional relationships. Interns will have the opportunity to
                                            network with a diverse group of healthcare professionals, peers, and local
                                            leaders. These connections can be invaluable as they navigate their future
                                            careers in medicine and healthcare.
                                        </p>
                                        <h4 class="text-cyan">Application Process</h4>
                                        <p class="text-dark fs-5" style="text-align: justify;">
                                            We invite interested students to apply for this exciting opportunity.
                                            Applicants should submit their resumes, a cover letter expressing their
                                            interest in the program, and any relevant academic transcripts. We welcome
                                            students from all backgrounds and are committed to fostering a diverse and
                                            inclusive environment.
                                            <br> <br>
                                            For more information about the internship program and the application
                                            process, please contact us at <a href="mailto:rhotiahealthcentre@gmail.com"
                                                class="text-primary">rhotiahealthcentre@gmail.com</a>. We look forward
                                            to hearing from you and potentially welcoming you to RHOTIA Health Center!

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