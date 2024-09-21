@extends('layout.app')

@section('title','Contacts')

@section('content')

<!-- Start contact  -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Get in Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ut laboriosam corporis doloribus, officia, accusamus illo nam tempore totam alias!</p>
                    </div>
                    <!-- end title -->
                    <!-- start contact content -->
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">

                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif

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
                                            <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                        </p>
                                        <p class="form-submit">
                                            <input type="submit" value="Send Message" class="mu-post-btn" name="submit">
                                        </p>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-contact-right">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15932.636284630053!2d35.737693!3d-3.310809!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18343d04a42af821%3A0x9e2923290b9f2b07!2sRhotia%20Health%20Center!5e0!3m2!1ssw!2stz!4v1726954027676!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact  -->

@endsection