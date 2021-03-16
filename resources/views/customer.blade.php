@extends('layouts.app')

@section('content')
<!-- Customer -->
<section class="customer section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">
        <h1 class="mb-4" data-aos="fade-up">Our Customers</h1>
      </div>

      @foreach($customers as $customer)
      <div class="col-xl-4 col-sm-12 mt-5">
        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
          <img src="{{asset($customer->image)}}" class="img-fluid" alt="project image">
          <div class="project-info card-info customer-info">
            <h3 class="text-truncate">
              <span>{{$customer->name}}</span>
            </h3>
            <small>{{$customer->address}}</small>
          </div>
        </div>
      </div>
      @endforeach

    </div>
</section>
@endsection