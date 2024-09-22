@extends('layout.app')

@section('title','Who We Are')

@section('content')

<section id="">
    <div class="container">
        <div class="row" style="margin-top: 10px;">
            <div class="mu-course-container mu-blog-single">
                <div class="row">
                    <div class="col-md-12">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <h2 style="font-weight: bold; margin-bottom:10px;">BACKGROUND</h2>
                        <p>
                            The Baldegger Sisters have been dedicated to serving the people of Tanzania since 1921, marking a century of commitment with the involvement of 126 sisters in various mission projects. Guided by the spirituality of St. Francis of Assisi, their efforts encompass both social initiatives and the development of the local church.
                        </p>
                        <p>
                            In 1978, Sisters Clementina Bütler and Erika Lischer established a first aid post in Rhotia, initially living alongside the Capuchin brothers. As their mission expanded, they built a mud house and later a dedicated sisters' residence. Sister Ruth Gasche joined them in 1980, enhancing their community efforts.
                        </p>
                        <p>
                            By 1987, Sister Verona Hutter arrived to take over the health center, focusing on training local women as nurses and midwives. Alongside Sister Blasia Zielmann, who joined in 1988, they transformed the first aid post into a fully-fledged health center by 1997, which included inpatient services. Their dedication extended to caring for marginalized populations, including those with disabilities.
                        </p>
                        <p>
                            The Rhotia Health Centre has consistently provided vital medical care, treating all patients regardless of their ability to pay. The center now serves around 20,000 patients annually, addressing major health issues such as malaria, tuberculosis, and maternal care. The sisters also established a vehicle service for patient transport, vital for timely medical interventions.
                        </p>
                        <p>
                            In 2016, the Mahenge Sisters were invited to take over the management of the center. After the passing of Sister Verona in 2016 and Sister Blasia in 2022, the Mahenge Sisters continued the legacy of compassionate care established by their predecessors. Under the leadership of Sister Prisila and Sister Floriana, the center maintains its commitment to equitable healthcare, relying on donations and government support to serve the community effectively.
                        </p>
                        <p>
                            The Rhotia Health Centre embodies the spirit of the Baldegger Sisters, where care, compassion, and community support create a safe haven for the region's most vulnerable populations.
                        </p>
                    </div>
                </div>
            </div>
            <!-- start respond form -->
            <div class="row">
                <div class="col-md-8" style="margin: 10px;">
                    <div id="respond">
                        <h3 class="reply-title">Leave a Comment</h3>

                        <form action="{{ route('contact.send') }}" method="POST" class="contactform">
                            @csrf
                            <p class="comment-form-author">
                                <label for="author">Name <span class="required">*</span></label>
                                <input type="text" required="required" size="30" value="" name="author">
                            </p>
                            <p class="comment-form-email">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" required="required" aria-required="true" value="" name="email">
                            </p>
                            <p class="comment-form-url">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" required="required">
                            </p>
                            <p class="comment-form-comment">
                                <label for="comment">Message</label>
                                <textarea required="required" aria-required="true" rows="8" cols="30" name="comment"></textarea>
                            </p>
                            <p class="form-submit">
                                <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end respond form -->
        </div>
    </div>
</section>

@endsection