<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="/js/navbar.js"></script>
     <script src="/js/add.js"></script>

  </head>
  <body>
	
	@include('master.nav')	
  	
	@yield('content')

	@include('master.footer')
  </body>
</html>
