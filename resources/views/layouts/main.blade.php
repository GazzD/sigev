<!DOCTYPE html>
<html>
<head>
<title>App Name - @yield('title')</title>
</head>
<body>
	<div class="header">@include('layouts.header')</div>
	<div class="container">@yield('content')</div>
	<div class="footer">@include('layouts.footer')</div>
</body>
</html>