<!doctype html>
<html lang="en" class="no-js" data-scheme="alt">
<head>

    {{--<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content="Responsive bootstrap 4 admin template" name="description" />--}}
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <title>Culture</title>
	
	@include('liens.lien_css')
    @yield('css')
    @livewireStyles
</head>
@if(request()->is('blog'))
	<body class="navbar-sticky navbar-transparent has-sidebar">
 @else @if(request()->is('blogcate/*'))
	<body class="navbar-sticky navbar-transparent has-sidebar">
 @else
 <body class="home navbar-sticky navbar-transparent">
 @endif
 @endif

 <body>
	
	@include('layouts.head')

	{{$slot}}

	@include('layouts.foot')

	@include('liens.lien_js')
    @yield('js')
    @livewireScripts

</body>
</html>