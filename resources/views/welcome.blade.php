@extends('layout.master')
@section('content')
@include('sweetalert::alert')



<h1>Selamat Datang {{Auth()->user()->name ?? " "}}</h1>
@endsection