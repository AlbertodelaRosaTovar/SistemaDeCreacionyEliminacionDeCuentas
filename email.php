<?php
session_start();
require_once 'cnn.php';
require_once 'cdn.html';


?>
<?php

//se verifica si se presiona el botón llamado validar
if (isset($_POST['continuar'])) {
	//se guarda en las variables$us y $ps
	$email = $_POST['email'];
	//Query de consulta
	$query = $cnnPDO->prepare('SELECT * from usuarios WHERE email =:email and status = "Activo" ');
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
		$_SESSION['status'] = $campo['status'];
		header("location:password.php");
	} else {
?><div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>ERROR de datos!</strong> Verifique La Dirección de correo electrónico
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
<?php
	}
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


			<a href="registro.php">
				<button type="button" class="btn btn-secondary me-3">
					Comienza ahora es, es gratis
				</button>
			</a>
		</div>
		</div><!-- Collapsible wrapper -->
		</div><!-- Container wrapper -->
	</nav><!-- Navbar -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-2">

			</div>
			<div class="col-8">
				<!-- INICIO SESION-->
				<div class="gris" class="input-group flex-nowrap">
					<span class="input-group-text" id="addon-wrapping">
						<i class="fas fa-key">&nbsp;Iniciar Sesión</i>
					</span>
				</div>
				<!-- FORM-->
				<form action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-horizontal" id="loginform" method="POST" role="form">
					<br>

					<!-- email-->
					<div class=" offset-2 col-10">
						<label for="email">Email*:</label><input type="text" id="email" name="email" value="" size="40" placeholder="">
						<br>
						<br>
					</div>

					<!-- BOTON REGISTRAR-->
					<div class=" offset-5 col-7">
						<input type="submit" name="continuar" value="Continuar">
					</div>
					<br>
				</form><!-- FORM-->

				<!-- REGRESAR -->
				<div class=" offset-9 col-3">
					<button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"><a href="index.php">Regresar </a></button>
				</div>

			</div><!-- COL-6-->
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