<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>content list</title>
</head>
<body>
	@foreach($data as sistem)
	<h1> {{sistem['tittle']}} </h1>
	<p> {{sistem['description']}} </p>
	@endforeach
</body>
</html>