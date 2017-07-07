@extends('master.layout')

@section('login')
	
	@include('partials.nav-login')	
	@include('partials.form-login')
	
@endsection

@section('content')
	
  	@include('partials.carousel')
	@include('entry.album')
	
@endsection