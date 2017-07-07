@extends('master.layout')


@section('login')
	
	@include('partials.nav-login')	
	@include('partials.form-login')
	
@endsection

@section('content')
	
	@include('entry.partials.form-show')
		
@endsection