<?php
session_start();
require_once 'cnn.php';
require_once 'cdn.html';


//se guarda en las variables$us y $ps
$email = $_SESSION['email'];
//Query de consulta
$query = $cnnPDO->prepare('SELECT * from usuarios WHERE email =:email  ');
$query->bindParam(':email', $email);
$query->execute();
$count = $query->rowCount();
$campo = $query->fetch();
unset($query);
unset($cnnPDO);
if ($count) {
	$_SESSION['email'] = $campo['email'];
	$_SESSION['name'] = $campo['name'];
	$_SESSION['celular'] = $campo['celular'];
	$_SESSION['ingreso'] = $campo['ingreso'];
	$_SESSION['password'] = $campo['password'];
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta tu buro de credito GRATIS</title>
	<link rel="icon" href="img/logo.png" />
</head>

<body id="fondo">
	<style>
		#naz {
			background-color: #fff;
		}

		#fondo {
			background-color: #e6ebdd;
		}

		#loginform {
			background-color: #FFFFFF;
			border: 1px solid #ccc;
			box-shadow: 0px 2px .5px 1px #ccc;
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

			<a href="misdatos.php"><img src="img/user.png" /></a>
		</div><!-- Collapsible wrapper -->
		</div><!-- Container wrapper -->
	</nav><!-- Navbar -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-2">

			</div>
			<div class="col-8">
				<form id="loginform">
					<!-- INICIO SESION-->
					<div class="gris" class="input-group flex-nowrap">
						<span class="input-group-text" id="addon-wrapping">
							<i class="far fa-address-card">&nbsp;Inicio</i>
						</span>
					</div>
					<h2>Bienvenido <?php echo ucwords($_SESSION['name']); ?></h2>


			</div><!-- COL-6-->
			<!-- REGRESAR -->

			</form>

		</div><!-- ROW -->
	</div><!-- Containerr -->
	<footer>
		<br>
		<br>
		<br>
		<hr>

		<center>
			<p>Copyright © Alberto De La Rosa Tovar</p>
		</center>
	</footer>
</body>

</html>