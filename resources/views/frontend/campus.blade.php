@extends('layouts.frontend2')

@section('title','Campus')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="p-4" style="text-align: center;">United States of America</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <p><a class="text-dark" href="#">United States</a></p>
                <p><a class="text-dark" href="#">Australia</a></p>
                <p><a class="text-dark" href="#">United States</a></p>
                <p><a class="text-dark" href="#">Australia</a></p>
                <p><a class="text-dark" href="#">United States</a></p>
                <p><a class="text-dark" href="#">Australia</a></p>
                <p><a class="text-dark" href="#">United States</a></p>
                <p><a class="text-dark" href="#">Australia</a></p>
            </div>
            <div class="col-10 mb-5">
                <div class="row" style="min-height: 300px;">
                    <div class="col-4">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/wtYmXeAbcdY"></iframe>
                        </n>
                        <p class="mt-2" style="text-align: center">
                            <a class="text-dark text-small" href="{{route('campus_detail')}}">
                                American University
                            </a>
                        </p>
                    </div>
                    <div class="col-4">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/wtYmXeAbcdY"></iframe>
                        </n>
                        <p class="mt-2" style="text-align: center">
                            <a class="text-dark text-small" href="{{route('campus_detail')}}">
                                American University
                            </a>
                        </p>
                    </div>
                    <div class="col-4">
                        <iframe class="w-100 h-100" src="https://www.youtube.com/embed/wtYmXeAbcdY"></iframe>
                        </n>
                        <p class="mt-2" style="text-align: center">
                            <a class="text-dark text-small" href="{{route('campus_detail')}}">
                                American University
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

