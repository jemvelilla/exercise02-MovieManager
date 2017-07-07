<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title></title>
</head>
<body>
	<ul>
	@foreach($entries as $entry)
		<li>{{ $entry->title }}</li>
	@endforeach
	</ul>
</body>
</html>