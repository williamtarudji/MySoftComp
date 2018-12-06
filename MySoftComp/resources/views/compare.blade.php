@extends('layout')
@section('head')
    <!-- Required meta tags -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_compare.css')}}">
@endsection
@section('title')
@section('main')
    <div class="content">
        <div class="dropdown category">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Choose Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Example</a>
                <a class="dropdown-item" href="#">AExample</a>
                <a class="dropdown-item" href="#">Example</a>
            </div>
        </div>

        <div class="box-compare">
            <div class="border">
                <div class="border-content">
                    <span>Software Name</span>
                    <div class="imagesoft">
                        <img src="image/logo.png" alt="">
                    </div>
                    <div class="dropcategory">
                        <div class="dropdown category">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Choose Category
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Example</a>
                                <a class="dropdown-item" href="#">AExample</a>
                                <a class="dropdown-item" href="#">Example</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="icon">
                <a href="">
                    <img src="image/icon-search.png" alt="">
                </a>    
            </div>

            <div class="border">
                <div class="border-content">
                    <span>Software Name</span>
                    <div class="imagesoft">
                        <img src="image/logo.png" alt="">
                    </div>
                    <div class="dropcategory">
                        <div class="dropdown category">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Choose Category
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Example</a>
                                <a class="dropdown-item" href="#">AExample</a>
                                <a class="dropdown-item" href="#">Example</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection