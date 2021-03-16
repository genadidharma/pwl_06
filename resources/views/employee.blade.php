@extends('layouts.app')

@section('content')
<!-- Employee -->
<section class="employee section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">
        <h1 class="mb-4" data-aos="fade-up">Employee Musketeers</h1>
      </div>
      
      @foreach ($employee as $employee)
          <div class="col-lg-2 mr-auto mt-3 col-md-5 col-12">
            <div class="contact-image" data-aos="fade-up">
              <img src="{{asset($employee->image)}}" class="img-fluid" alt="project image">
            </div>
          </div>
  
          <div class="col-lg-4 mr-auto mt-3 col-md-7 col-12">
            <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">{{$employee->name}}</h2>
            <h4 class="my-8 pt-10" data-aos="fade-up" data-aos-delay="100">{{$employee->nip}}</h4>
          </div>
      @endforeach
      
    </div>
</section>
@endsection