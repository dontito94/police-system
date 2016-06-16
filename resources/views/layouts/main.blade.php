<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{URL::to('css/main.css')}}">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	@yield('styles')
</head>
<body>
@include('includes.header')
<div class="section">
	@yield('content')
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</body>
</html>