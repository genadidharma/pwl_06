@extends('layouts.app')

@section('content')
<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="hero-text">

                    <h1 class="text-white" data-aos="fade-up">We are ready for your digital marketing</h1>

                    <a href="{{route('contact')}}" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a>

                    <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +99 080 070 4224</strong>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                    <img src="{{asset('images/working-girl.png')}}" class="img-fluid" alt="working girl">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section class="about section-padding pb-0" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 mx-auto col-md-10 col-12">
                <div class="about-info">

                    <h2 class="mb-4" data-aos="fade-up">the best <strong>Digital Marketing agency</strong> in Rio de Janeiro</h2>

                    <p class="mb-0" data-aos="fade-up">Total 5 HTML pages are included in this template from TemplateMo website. Please check 2 <a href="{{asset('blog.html')}}">blog</a> pages, <a href="{{asset('project-detail.html')}}">project</a> page, and <a href="{{asset('contact.html')}}">contact</a> page.
                        <br><br>You are <strong>allowed</strong> to use this template for commercial or non-commercial purpose. You are NOT allowed to redistribute the template ZIP file on template collection websites.
                    </p>
                </div>

                <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                    <img src="{{asset('images/office.png')}}" class="img-fluid" alt="office">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- PROJECT -->
<section class="project section-padding" id="project">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12">

                <h2 class="mb-5 text-center" data-aos="fade-up">
                    Please take a look through our
                    <strong>featured Digital Trends</strong>
                </h2>

                <div class="owl-carousel owl-theme" id="project-slide">
                    @foreach($projects as $project)
                    <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset($project->image)}}" class="img-fluid" alt="project image">

                        <div class="project-info">
                            <small>{{$project->category}}</small>

                            <h3>
                                <a href="{{ route('project-detail', ['slug' => $project->slug] ) }}">
                                    <span>{{$project->category}}</span>
                                    <i class="fa fa-angle-right project-icon"></i>
                                </a>
                            </h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>


<!-- TESTIMONIAL -->
<section class="testimonial section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <div class="contact-image" data-aos="fade-up">

                    <img src="{{asset('images/female-avatar.png')}}" class="img-fluid" alt="website">
                </div>
            </div>

            <div class="col-lg-6 col-md-7 col-12">
                <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                <p data-aos="fade-up" data-aos-delay="400">
                    <strong>Mary Zoe</strong>

                    <span class="mx-1">/</span>

                    <small>Digital Agency (CEO)</small>
                </p>
            </div>

        </div>
    </div>
</section>
@endsection