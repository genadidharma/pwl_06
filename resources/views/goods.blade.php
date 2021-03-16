@extends('layouts.app')

@section('content')
<!-- Goods -->
<section class="goods section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">
        <h1 class="mb-4" data-aos="fade-up">The Goods are good</h1>
      </div>
      @foreach($goods as $good)
      <div class="col-xl-6 col-sm-12 mt-5">
        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
          <img src="{{asset($good->image)}}" class="img-fluid" alt="project image">
          <div class="project-info card-info d-flex mb-3">
            <div class="mr-auto">
              <small>{{$good->category}}</small>
              <h3>
                <span>{{$good->name}}</span>
              </h3>
            </div>
            <h2 class="align-self-center">
              <span>${{$good->price}}</span>
            </h2>
          </div>
        </div>
      </div>
      @endforeach

    </div>
</section>
@endsection