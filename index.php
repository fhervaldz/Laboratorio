<?php include_once "controllers/ingreso.php";
      include_once "models/crud.php";
      session_start();
 ?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="CMStudio" />
	<!-- <link rel="shortcut icon" href="favicon.ico" /> -->

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="lib/vendor/bootstrap/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="views/css/style.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="lib\vendor\adminlte\dist\css\adminlte.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Panel  | GA Recursos Humanos</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap nopadding">

				<div class="section nopadding nomargin" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #305c7b center center no-repeat; background-size: cover;"></div>

				<div class="section nobg full-screen nopadding nomargin">
					<div class="container-fluid vertical-middle divcenter clearfix">

						<div class="center">
							
						</div>

						<div class="card divcenter noradius noborder">
							<div class="card-body" style="padding: 40px;">
								<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
									<h3>Panel de Administraci&oacute;n</h3>

									<div class="col_full">
										<label for="login-form-username">Usuario:</label>
										<input type="text" id="login-form-username" name="usuario" value="" class="form-control not-dark" />
									</div>

									<div class="col_full">
										<label for="login-form-password">Password:</label>
										<input type="password" id="login-form-password" name="password" value="" class="form-control not-dark" />
									</div>

									<div class="col_full nobottommargin">
										<button class="button button-3d button-black nomargin" id="usuarioIngreso" name="usuarioIngreso" value="login">login</button>
									</div>

									<?php
							          $ingreso = new Ingreso();
							          $ingreso -> ingresoController();
							        ?>
								</form>

								<div class="line line-sm"></div>

							</div>
						</div>

<!-- 						<div class="center dark" style="color: #DFDD43;"><small>Copyrights &copy; 2019 BYSO.</small></div> -->

					</div>
				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="lib/vendor/bootstrap/js/bootstrap.js"></script>


</body>
</html>