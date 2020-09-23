@extends('layouts.frontend2')

@section('title','Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="1.jpeg" class="img-fluid" alt="1">
                        </div>
                        <div class="carousel-item">
                            <img src="1.jpeg" class="img-fluid" alt="2">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>


        <!-- 3 kolom pelayanan -->
        <div class="row mt-4">
            <div class="col border border-warning p-4">
                <h1>Learn English !</h1>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum."
                </p>
                <p style="text-align: right;font-style: italic"><a href="{{route('english_course')}}" class="text-dark">More</a></p>
            </div>
            <div class="col border border-warning mx-3 p-4">
                <h1>Learn Mandarin !</h1>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum."
                </p>
                <p style="text-align: right;font-style: italic"><a href="{{route('mandarin_course')}}" class="text-dark">More</a></p>
            </div>
            <div class="col border border-warning p-4">
                <h1>Studying Abroad !</h1>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum."
                </p>
                <p style="text-align: right;font-style: italic"><a href="{{route('destinations')}}" class="text-dark">More</a></p>
            </div>
        </div>


        <!-- Destinations -->
        <div class="row mt-4">
            <div class="col">
                <h2 class="text-center text-uppercase text-underline">Destinations</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="us.jpeg" class="img-fluid" alt="us"></a>
            </div>
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="australia.jpeg" class="img-fluid" alt="australia"></a>
            </div>
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="hongkong.jpeg" class="img-fluid" alt="hongkong"></a>
            </div>
        </div>
        <div class="row border-bottom border-warning mb-2">
            <div class="col text-center">
                <a class="btn btn-warning px-5 py-3 my-4" href="{{route('destinations')}}">View More</a>
            </div>
        </div>


        <!-- ini Partner Universities -->
        <div class="row mb-5">
            <div class="col">
                <div class="row mt-4">
                    <div class="col">
                        <h2 class="text-center text-uppercase text-underline">Partner Universities</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="demo3" class="carousel slide" data-ride="carousel"
                         style="width: 100%;height: 100%;text-align: center;">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo3" data-slide-to="0" class="active"
                                style="background-color:darkorange;"></li>
                            <li data-target="#demo3" data-slide-to="1" style="background-color:darkorange;"></li>
                            <li data-target="#demo3" data-slide-to="2" style="background-color:darkorange;"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="partner1.png" alt="1">
                            </div>
                            <div class="carousel-item">
                                <img src="partner2.png" alt="2">
                            </div>
                            <div class="carousel-item">
                                <img src="partner3.png" alt="3">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo3" data-slide="prev">
                            <span class="carousel-control-prev-icon" style="background-color:darkorange;"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo3" data-slide="next" ">
                        <span class="carousel-control-next-icon" style="background-color:darkorange;"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

