@extends('layout')
@section('head')
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_view_product.css')}}">
@endsection
@section('title')
@section('main')
    <div class="featurette">
      <div class="row featurette feat">
        @foreach($software as $soft)
          <div class="col-md-6">
            <div class="feat-head">
              <h2 class="featurette-heading">{{$soft->product_name}}</h2>
            </div>

            <div class="feat-body">
              <img src="../image/logo/{{$soft->imagedir}}" alt="" width="105" height="125">
              <p class="lead">{{$soft->product_description}}</p>
              <p class="lead"><span>Price : </span>Rp {{$soft->price}}</p>
              <p class="lead"><span>Size  : </span>{{$soft->file_size}} MB</p>
              <p class="lead"><span>Platform : </span>{{$soft->platform}}</p>
              <p class="lead"><span>License : </span>{{$soft->license}}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
@endsection
