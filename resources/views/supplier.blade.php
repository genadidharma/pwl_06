@extends('layouts.app')

@section('content')
<!-- Supplier -->
<section class="employee section-padding">
  <div class="container">
    <div class="row">

      <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

        <h1 class="mb-4" data-aos="fade-up">Fast, Reliable Suppliers</h1>
      </div>

      @foreach ($supplier as $supplier)
        <div class="col-lg-4 col-md-5 col-12 mb-4">
            <div class="blog-sidebar d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <img src="{{asset($supplier->image)}}" class="img-fluid" alt="blog">

              <div class="blog-info">
                <h4 class="blog-category text-danger">{{$supplier->name}}</h4>

                <h3>{{$supplier->address}}</a></h3>
              </div>
            </div>    
        </div>
      @endforeach
    </div>
</section>
@endsection