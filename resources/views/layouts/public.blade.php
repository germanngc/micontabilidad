<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="{{ config('app.name') }}" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>@yield('title') | {{ config('app.name') }} | By Nina Code</title>

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content="@yield('title')"/>
		<meta property="og:image" content="@yield('featured_img')"/>
		<meta property="og:url" content="https://www.ninacode.mx/"/>
		<meta property="og:site_name" content="{{ config('app.name') }}"/>
		<meta property="og:description" content="@yield('description')"/>
		<meta name="twitter:title" content="@yield('title')" />
		<meta name="twitter:image" content="@yield('featured_img')" />
		<meta name="twitter:url" content="http://www.ninacode.com/" />
		<meta name="twitter:card" content="summary_large_image" />

		<!-- Stylesheets
		============================================= -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/bootstrap.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/app.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/dark.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/font-icons.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/animate.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/magnific-popup.css') }}" type="text/css">
		<link rel="stylesheet" href="{{ asset('assets/app/css/custom.css') }}" type="text/css" />

		<!-- Document Title
		============================================= -->
		<style>
			.device-xl #slider .emphasis-title h1 { font-size: 52px; }
			.device-lg #slider .emphasis-title h1 { font-size: 44px; }
		</style>
	</head>

	<body class="stretched">

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			@hasSection('_header')
			<!-- Header
			============================================= -->
			<?php echo View::make('partials/public/_header', []); ?> 
			@endif

			@hasSection('_slider')
			<!-- Slider
			============================================= -->
			<?php echo View::make('partials/public/_slider', []); ?> 
			@endif

			<!-- Content
			============================================= -->
			<section id="content">
				@yield('content')
			</section><!-- #content end -->

			@hasSection('_footer')
			<!-- Footer
			============================================= -->
			<?php echo View::make('partials/public/_footer', []); ?> 
			@endif

		</div><!-- #wrapper end -->

		<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

		<!-- JavaScripts
		============================================= -->
		<script src="{{ asset('assets/app/js/jquery.js') }}"></script>
		<script src="{{ asset('assets/app/js/plugins.min.js') }}"></script>

		<!-- Footer Scripts
		============================================= -->
		<script src="{{ asset('assets/app/js/functions.js') }}"></script>

	</body>
</html>