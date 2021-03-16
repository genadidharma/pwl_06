@extends('layouts.app')

@section('content')
<!-- BLOG -->
<section class="blog section-padding">
    <div class="container">
         <div class="row">

              <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                <h1 class="mb-4" data-aos="fade-up">Digital Trend Blog</h1>
              </div>

              <div class="col-lg-7 col-md-7 col-12 mb-4">
                <div class="blog-header" data-aos="fade-up" data-aos-delay="100">
                  <img src="{{asset($header->image)}}" class="img-fluid" alt="blog header">

                  <div class="blog-header-info">
                    <h4 class="blog-category text-info">{{$header->category}}</h4>

                    <h3><a href="{{route('blog-detail', ['slug' => $header -> slug])}}">{{$header->title}}</a></h3>
                  </div>
                </div>
              </div>

              <div class="col-lg-5 col-md-5 col-12 mb-4">
                @foreach ($side as $blog)
                  <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset($blog->image)}}" class="img-fluid" alt="blog">

                    <div class="blog-info">
                      <h4 class="blog-category text-danger">{{$blog->category}}</h4>

                      <h3><a href="{{route('blog-detail', ['slug' => $blog -> slug])}}">{{$blog->title}}</a></h3>
                    </div>
                  </div>    
                @endforeach
                
              </div>

              <div class="col-lg-5 ml-auto mt-5 pt-5 col-md-6 col-12">

                <img src="{{asset('images/newsletter.png')}}" data-aos="fade-up" data-aos-delay="100" class="img-fluid" alt="newsletter">
              </div>

              <div class="col-lg-5 mr-auto mt-5 pt-5 col-md-6 col-12 newsletter-form">
                <h4 data-aos="fade-up" data-aos-delay="200">Email Newsletter</h4>

                <h2 data-aos="fade-up" data-aos-delay="300">Let’s stay up-to-date. We'll share you all good stuffs.</h2>
                <form action="#" method="get" enctype="multipart/form-data">
                <div class="form-group mt-4" data-aos="fade-up" data-aos-delay="400">
                  <input name="email" type="email" class="form-control" 
                          id="email" aria-describedby="emailHelp" placeholder="Please enter your email" required>

                  <small id="emailHelp" class="form-text text-muted">We'll NOT share your email address to anyone else.</small>

                </div>

                <div class="form-group form-check" data-aos="fade-up" data-aos-delay="500">
                  <input name="monthly" type="checkbox" class="form-check-input" id="monthly">

                  <label class="form-check-label" for="monthly">Please send me a monthly newsletter.</label>
                </div>

                  <button type="submit" data-aos="fade-up" data-aos-delay="500" class="btn w-100 mt-3">Sign up</button>
                </form>
              </div>

         </div>
    </div>
</section>
@endsection
