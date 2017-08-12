<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content=""/>
<!-- Document Title -->
<title>Study Choice</title>

<!-- Favicon -->

<link rel="shortcut icon" href={{"images/favicon.png"}} type="image/x-icon">
<!-- StyleSheets -->
{{Html::style('css/bootstrap/bootstrap.min.css')}}
{{Html::style('css/font-awesome.min.css')}}
{{Html::style('css/animate.css')}}
{{Html::style('css/main.css')}}
{{Html::style('css/flaticon.css')}}
{{Html::style('css/style.css')}}
{{Html::style('css/color.css')}}
{{Html::style('css/responsive.css')}}
{{Html::style('css/transition.css')}}

<!-- FontsOnline -->
{{Html::style('https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic')}}
{{Html::style('https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic')}}
{{Html::style('https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic')}}

<!-- JavaScripts -->
{{Html::script('js/vendor/modernizr.js') }}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Wrapper -->
<div class="wrapper">

	<!-- Header -->
	@include('partials.header')
	<!-- Header -->

	<!-- main Content -->
	@yield('content')

	<!-- Footer -->
	@include('partials.footer')

<!-- Java Script -->
{{Html::script('js/vendor/jquery.js') }}
{{Html::script('js/vendor/bootstrap.min.js') }}
{{Html::script('http://maps.google.com/maps/api/js?sensor=false') }}
{{Html::script('js/gmap3.min.js') }}
{{Html::script('js/datepicker.js') }}
{{Html::script('js/contact-form.js') }}
{{Html::script('js/parallax.js') }}
{{Html::script('js/countdown.js') }}
{{Html::script('js/countTo.js') }}
{{Html::script('js/owl-carousel.js') }}
{{Html::script('js/appear.js') }}
{{Html::script('js/sticky.js') }}
{{Html::script('js/prettyPhoto.js') }}
{{Html::script('js/isotope.pkgd.js') }}
{{Html::script('js/wow-min.js') }}
{{Html::script('js/main.js') }}

</body>
</html>

<!-- Localized -->
