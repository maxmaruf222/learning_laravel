<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page</title>
</head>
<body>
	<h1>this is home page</h1>
	<ul><li><a href="{{url('route1')}}">click</a></li></ul>
	<ul><li><a href="{{ route('routeName0'); }}">check route name</a></li></ul>

	<br>


	<form action="{{ route('formSubmit') }}" method="POST">
		<!-- define csrf protection -->
		@csrf
		<input type="text" name="name" placeholder="Enter your name"><br>
		<input type="email" name="email" placeholder="Enter your email"><br>
		<input type="submit" name="submit">
	</form>
	@if (session('status'))
		<p>{{session('status')}}</p>
	@endif
</body>
</html>