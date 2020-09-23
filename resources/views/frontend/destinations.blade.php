@extends('layouts.frontend2')

@section('title','Destinations')

@section('content')
    <!-- Destinations -->
    <div class="jumbotron jumbotron-fluid">
        <h1 class="text-center text-uppercase text-underline">Destinations</h1>
    </div>

    <div class="container">
        <div class="row mt-4">
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="us.jpeg" class="img-fluid" alt="us"></a>
                <p class="mt-2" style="text-align: center">
                    <a class="text-dark text-small" href="{{route('campus')}}">
                        United States
                    </a>
                </p>
            </div>
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="australia.jpeg" class="img-fluid" alt="australia"></a>
                <p class="mt-2" style="text-align: center">
                    <a class="text-dark text-small" href="{{route('campus')}}">
                        Australia
                    </a>
                </p>
            </div>
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="hongkong.jpeg" class="img-fluid" alt="hongkong"></a>
                <p class="mt-2" style="text-align: center">
                    <a class="text-dark text-small" href="{{route('campus')}}">
                        Hongkong
                    </a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="us.jpeg" class="img-fluid" alt="us"></a>
                <p class="mt-2" style="text-align: center">
                    <a class="text-dark text-small" href="{{route('campus')}}">
                        United States
                    </a>
                </p>
            </div>
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="australia.jpeg" class="img-fluid" alt="australia"></a>
                <p class="mt-2" style="text-align: center">
                    <a class="text-dark text-small" href="{{route('campus')}}">
                        Australia
                    </a>
                </p>
            </div>
            <div class="col-4 p-3">
                <a href="{{route('campus')}}"><img src="hongkong.jpeg" class="img-fluid" alt="hongkong"></a>
                <p class="mt-2" style="text-align: center">
                    <a class="text-dark text-small" href="{{route('campus')}}">
                        Hongkong
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection

