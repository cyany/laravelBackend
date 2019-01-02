<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach ($abc as $val)
	<p>{{$val}}</p>
@endforeach

<form method="POST" action="/profile">
    @csrf
		<input type="text">
</form>
</body>
</html>
