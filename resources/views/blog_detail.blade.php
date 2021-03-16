@extends('layouts.app')

@section('content')
<!-- BLOG DETAIL -->
<section class="project-detail section-padding-half">
    <div class="container">
         <div class="row">

              <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">
                <h4 class="blog-category text-info">{{$side->category}}</h4>
                
                <h1>{{$side->title}}</h1>

                <div class="client-info">
                    <div class="d-flex justify-content-center align-items-center mt-3">
                      <img src="{{asset('images/project/project-detail/male-avatar.png')}}" class="img-fluid" alt="male avatar">

                      <p>Sweet Candy</p>
                    </div>
                </div>
              </div>

         </div>
    </div>
</section>


<div class="full-image text-center" data-aos="zoom-in">
 <img src="{{asset($side->image)}}" class="img-fluid" alt="blog header">
</div>


<!-- BLOG DETAIL -->
{{!! $side->content !!}}
    
@endsection
