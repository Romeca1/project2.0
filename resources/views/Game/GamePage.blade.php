<!DOCTYPE html>
<html>
<head>
	<title>{{$game->name}}</title>
	<style type="text/css">
		body{
			background-color: #581845;
		}
	</style>
</head>
<body>
	<iframe src="{{$game->link}}" width="100%" height="800"></iframe>
	<a href="/dashboard">Exit</a>
</body>
</html>