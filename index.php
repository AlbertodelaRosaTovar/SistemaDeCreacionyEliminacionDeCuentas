<?php
session_start();
require_once "cdn.html";

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta tu buro de credito GRATIS</title>
	<link rel="icon" href="img/logo.png" />
</head>

<body>
	<style>
		#naz {
			background-color: #fff;
		}
	</style>
	<!-- Navbar -->
	<nav id="naz" class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- Container wrapper -->
		<div class="container">
			<!-- Navbar brand -->
			<a class="navbar-brand me-2" href="img/RK.png">
				<img src="img/RK.png" height="46" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
			</a>
			<!-- Toggle button -->
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<!-- Left links -->
			<div class="d-flex align-items-center">
				<a href="email.php">
					<button type="button" class="btn btn-link px-3 me-2">
						Iniciar Sesion
					</button>
				</a>
				<a href="recuperar.php">
					<button type="button" class="btn btn-link px-3 me-2">
						Recuperar cuenta
					</button>
				</a>
				<a href="usuarios.php">
					<button type="button" class="btn btn-link  me-3">
						Mostrar usuarios registrados
					</button>
				</a>

				<a href="registro.php">
					<button type="button" class="btn btn-secondary me-3">
						Comienza ahora es, es gratis
					</button>
				</a>




			</div>
		</div><!-- Collapsible wrapper -->
		</div><!-- Container wrapper -->

	</nav>
	<!-- Navbar -->
	<!--inicio carousel-->
	<div class="carousel slide" data-ride="carousel" id="slider">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="img-fluid d-block " src="img/a.png" />
			</div>
			<div class="carousel-item">
				<img class="img-fluid d-block " src="img/b.png" />
			</div>
			<div class="carousel-item">
				<img class="img-fluid d-block " src="img/c.png" />
			</div>
		</div>
		<a class="carousel-control-prev" data-slide="prev" href="#slider" role="button">
			<span aris-hidden="true" class="carousel-control-prev-icon">
			</span>
			<span class="sr-only">
				Slider Previo
			</span>
		</a>
		<a class="carousel-control-next" data-slide="next" href="#slider" role="button">
			<span aris-hidden="true" class="carousel-control-next-icon">
			</span>
			<span class="sr-only">
				Slider Siguiente
			</span>
		</a>
	</div>
	<!--fin -->

	<br>



	<br>
	<footer class="bg-dark text-center text-white">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2020 Copyright:
			<a class="text-white" href="https://mdbootstrap.com/">Alberto De La Rosa</a>
		</div>
		<!-- Copyright -->
	</footer>
</body>

</html>