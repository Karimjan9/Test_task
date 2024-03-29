<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ url('logo.png') }}" type="image/png" />
	<!--plugins-->
	<link href="assets2/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets2/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets2/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets2/css/pace.min.css" rel="stylesheet" />
	<script src="assets2/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets2/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets2/css/app.css" rel="stylesheet">
	<link href="assets2/css/icons.css" rel="stylesheet">
	
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Кириш</h3>
									</div>
									<div class="login-separater text-center mb-4">
									</div>
									<div class="form-body">
										<form method="POST" action="{{ route('login_post') }}" class="row g-3">
											@csrf

											<div class="col-12">
													@foreach ($errors->all() as $error)
														<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
															<div class="text-white">{{ $error }}</div>
														</div>
													@endforeach
											</div>

											<div class="col-12">
												<label for="inputLogin" class="form-label">Логин</label>
												<input type="text" name="login" class="form-control" id="inputLogin" placeholder="Логинни киритинг">
											</div>
											<div class="col-12">
												<label for="inputPassword" class="form-label">Пароль</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputPassword" placeholder="Парольни киритинг"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" name="remember" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Эслаб қолиш</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Кириш</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets2/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets2/js/jquery.min.js"></script>
	<script src="assets2/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets2/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets2/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets2/js/app.js"></script>
</body>

</html>
