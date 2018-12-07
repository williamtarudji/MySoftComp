@extends('layout')
@section('head')
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_home.css')}}">
@endsection
@section('title')
@section('main')
  <!-- Content -->
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">MySoftComp</h1>
      <h6 class="display-4 text-left intro">Merupakan website yang dapat membantu anda dalam memilih software yang sesuai kebutuhan anda</h6>
    </div>
      <button id="buttonCompare"><a href="/compare"> COMPARE</a></button>
  </div>
  <!-- End Jumbotron -->

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

  <script>
      $(function(){
          $('a[href*="#"]:not([href="#"])').click(function(){
              if(location.pathname.replace(/^\//,'')==this.pathname.replace(/^\//'')&&location.hostname == this.hostname)
              {
                  var target = $(this.hash);
                  target=target.length?target:$('[name'+this.hash.slice(1)+']');
                  if(target.length){
                      $('html,body').animate({
                          scrollTop: target.offset().top
                      },1000);
                      return false;
                  }
              }
          });
      });
  </script>

@endsection
