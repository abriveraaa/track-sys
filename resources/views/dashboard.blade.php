@extends('adminlte::page')

@section('title', 'Dashboard')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
@section('content')
@stop

@section('footer')
<div class="float-left d-none d-sm-block">
    <strong>Copyright © {{ now()->year }}.</strong> All rights reserved.
</div>
<div class="float-right d-none d-sm-block">
    <strong><a href="#">{{ config('adminlte.name') }}</a></strong>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('client/css/custom.css') }}">
@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>   
@stop
