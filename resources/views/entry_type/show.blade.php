@extends('master.layout')


@section('login')
	
	@include('partials.nav-login')	
	@include('partials.form-login')
	
@endsection

@section('profile')
	
	@include('partials.nav-profile')	
	
@endsection

@section('content')
	
	@include('entry_type.partials.album')
	
@endsection