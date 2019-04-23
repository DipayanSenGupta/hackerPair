<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	<div id="app">
		@yield("content")
	</div>
	<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>