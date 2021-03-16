@extends('layouts.app')

@section('content')
<!-- PROJECT DETAIL -->
<section class="project-detail section-padding-half">
    <div class="container">
         <div class="row">

              <div class="col-lg-9 mx-auto col-md-10 col-12 mt-lg-5 text-center" data-aos="fade-up">

                <h4>{{$project->category}}</h4>

                <h1>{{$project->title}}</h1>
              </div>

         </div>
    </div>
</section>

<div class="full-image text-center" data-aos="zoom-in">
 <img src="{{asset($project->image)}}" class="img-fluid" alt="interview process">
</div>

<!-- PROJECT DETAIL -->
{{!! $project->content !!}}

@endsection
