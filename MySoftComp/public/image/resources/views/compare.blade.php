@extends('layout')
@section('head')
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_compare.css')}}">
    <link rel="stylesheet" href="{{asset('intro.js-2.9.3/introjs.css')}}">
@endsection
@section('title')
@section('main')
    <div class="content">
        <div class="dropdown category">
            <a class="btn btn-large btn-primary" href="javascript:void(0);" onclick="javascript:introJs().start();">Tour</a>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-step="1" data-intro="Halo, kamu bisa memilih kategori software disini">
                Choose Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Code Editor</a>
                <a class="dropdown-item" href="#">Text Editor</a>
                <a class="dropdown-item" href="#">Video Editor</a>
            </div>
        </div>

        <div class="box-compare" data-step="2" data-intro="Sekarang kita pindah ke bagian compare, disini kamu bisa memilih software yang akan dicompare" data-position='left'>
            <div class="border" data-step="3" data-intro="Masukkan software yang akan dicompare" data-position='left'>
                <div class="border-content">
                    <span>Software Name</span>
                    <div class="imagesoft">
                        <img src="image/logo.png" alt="">
                    </div>
                    <div class="dropcategory">
                        <div class="itemBox">
                            <form action="/" method="GET">
                                <input class="itemBox1" type="text" placeholder="Software1..." name="item1">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="icon" data-step="5" data-intro="Terakhir tekan tombol ini untuk melihat hasil compare softwaremu">
                <a href="">
                    <img src="image/graph.png" alt="">
                </a>    
            </div>

            <div class="border" data-step="4" data-intro="Sekarang, kamu bisa pilih satu software lagi sebagai perbandingan" data-position='right'>
                <div class="border-content">
                    <span>Software Name</span>
                    <div class="imagesoft">
                        <img src="image/logo.png" alt="">
                    </div>
                    <div class="dropcategory">
                        <div class="itemBox">
                            <form action="/" method="GET">
                                <input class="itemBox2" type="text" placeholder="Software2..." name="item2">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('intro.js-2.9.3/intro.js')}}"></script>
@endsection