@extends('master.layout')

@section('login')
	
	@include('partials.nav-login')	
	@include('partials.form-login')
	
@endsection

@section('profile')
	
	@include('partials.nav-profile')	
	
@endsection

@section('content')
	
  	@include('partials.carousel')
	@include('entry.album')
	
@endsection