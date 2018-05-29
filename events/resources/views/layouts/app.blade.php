<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Eventbrote</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }} "/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	
</head>
	<body>
		@extends('layouts.partials._nav')
		<div class="container col-lg-5 col-lg-offset-3">
			@if(session()->has('notification.message'))
			<div class="alert alert-{{session('notification.type')}}">
				{{ session('notification.message')}}
			</div>
			@endif
			@yield('content')
		</div>
		<script src="{{ asset('/jquery/jquery.js') }} "></script>
		<script src="{{ asset('/js/larails.js') }} "></script>
		@include('flashy::message')
	</body>
</html>