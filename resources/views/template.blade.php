<!doctype html>
<html class="semi-dark">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	{{-- <link rel="icon" href="{{ asset('logo.png') }}" type="image/png" /> --}}
	<!--plugins-->
	<link href="assets2/plugins/notifications/css/lobibox.min.css" rel="stylesheet"/>
	<link href="assets2/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="assets2/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets2/plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
	<link href="assets2/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="assets2/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<link href="assets2/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets2/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets2/css/pace.min.css" rel="stylesheet"/>
	<script src="assets2/js/pace.min.js"></script>

	<script src="assets2/js/jquery.min.js"></script>

	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets2/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets2/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets2/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets2/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets2/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets2/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets2/css/header-colors.css') }}" />

	@yield('style')
	@stack('style')
	@yield('script_include_header')

	<title>{{ config('app.name') }}</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('sidebar.index')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('header')
		<!--end header -->
		<!--start page wrapper -->
		@yield('body')
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Karim © 2024.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets2/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets2/js/bootstrap.bundle.min.js"></script>
	<script src="assets2/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets2/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets2/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets2/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets2/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets2/plugins/chartjs/js/Chart.min.js"></script>
	<script src="assets2/plugins/input-tags/js/tagsinput.js"></script>
	<script src="assets2/plugins/chartjs/js/Chart.extension.js"></script>
	<script src="assets2/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
	<!--notification js -->
	<script src="assets2/plugins/notifications/js/lobibox.min.js"></script>
	<script src="assets2/plugins/notifications/js/notifications.min.js"></script>
	{{-- <script src="{{ asset('assets2/js/index3.js') }}"></script> --}}
	<!--app JS-->
	<script src="assets2/js/app.js"></script>
	@stack('scripte_include_end_body')
	@yield('scripte_include_end_body')
</body>

</html>
