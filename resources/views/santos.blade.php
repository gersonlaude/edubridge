@extends('layouts.frontend')

@section('title','santos')

@section('content')
    <ul>
        <li>Baris 1</li>
        <li>Baris 2</li>
        <li>Baris 3</li>
    </ul>
@endsection

@section('sidebar')

    ini Baris kedua
    @parent
@endsection
