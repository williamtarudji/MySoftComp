@extends('layout')
@section('head')
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_howto.css')}}">
@endsection
@section('title')
@section('main')
    <!-- Content -->
    <!-- Featurette -->
    <div class="featurette">
        <div class="row featurette feat">
            <div class="col-md-5 textright">
                <h2 class="featurette-heading headtext">Pilih category software yang ingin anda bandingkan.</h2>
            </div>
            <div class="col-md-4 imagefeat">
                <img src="../image/howTo/howTo1.jpg" alt="" class="rounded">
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette feat">
            <div class="col-md-4 imagefeat1">
                <img src="../image/howTo/howTo2.jpg" class="rounded">
            </div>
            <div class="col-md-5 textleft">
                <h2 class="featurette-heading headtext">Masukkan nama software dari kategori yang anda ingin bandingkan.</h2>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette feat">
            <div class="col-md-5 textright">
                <h2 class="featurette-heading headtext">Tekan tombol search dan MySoftComp akan menampilkan perbandingan software yang ingin dibandingkan.</h2>
            </div>
            <div class="col-md-4 imagefeat">
                <img src="../image/howTo/howTo3.jpg" alt="" class="rounded">
            </div>
        </div>
    </div>
    <!-- End Featurette -->
    <!-- End Content -->
@endsection
@section('footer')
