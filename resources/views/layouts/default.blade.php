<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

	
</head>

<body>

	<header>

		@include('includes.header')

	</header>

	<div id="main" class="row">

		@yield('content')

	</div>

	<footer class="row">

		@include('includes.footer')

	</footer>


</body>

</html>