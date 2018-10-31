 <!DOCTYPE html>
<html>
<head>
	<title>TODO</title>
	<link rel="stylesheet" type="text/css" href="{{secure_asset('css/app.css')}}">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
	<footer id="footer" class="text-center">
		<p>Copy right &copy; 2018 TODO</p>
	</footer>
</body>
</html>