@extends('layout.master')
@section('content')
@include('sweetalert::alert')


<h1>welcome {{Auth()->user()->name ?? " "}}</h1>
@endsection