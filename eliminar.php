<?php
session_start();
require_once 'cnn.php';
require_once 'cdn.html';

if (isset($_POST['eliminar'])) {


	$status = "Inactivo";
	$email = $_POST['email']; {
		$sql = $cnnPDO->prepare('UPDATE usuarios SET  status = :status  WHERE email= :email');
		//Asignar las variables a los campos de la tabla



		$sql->bindParam(':status', $status);
		$sql->bindParam(':email', $email);



		//Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);
		header("location: index.php");
	}
}

//Valida que el usuario hizo clik en el Boton 



?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>editar</title>
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


		</div><!-- Collapsible wrapper -->
		</div><!-- Container wrapper -->
	</nav><!-- Navbar -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-1">

			</div>
			<div class="col-11">
				<form action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-horizontal" id="loginform" method="POST" role="form">
					<!-- TABLA-->

					<table class="table  ">
						<thead class="table-dark">
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Celular</th>
								<th scope="col">email</th>
								<th scope="col">Ingreso</th>
								<th scope="col">Contraseña</th>
							</tr>
						</thead>

						<!--MOSTRAR DATOS EN TABLA-->
						<?php
						include 'cnn.php';
						?>
						<tr>
							<td> <input type="text" id="name" name="name" value=" <?php echo ucwords($_SESSION['name']); ?>"></td>

							<td> <input type="text" id="celular" name="celular" value="<?php echo $_SESSION['celular'] ?>" readonly></td>

							<td> <input type="text" id="email" name="email" value="<?php echo $_SESSION['email'] ?>" readonly></td>
							<td> <input type="text" id="ingreso" name="ingreso" value="<?php echo $_SESSION['ingreso'] ?>" readonly></td>

							<td> <input type="text" id="password" name="password" value="<?php echo $_SESSION['password'] ?>" readonly></td>

						</tr>
					</table>
					<h2>Estas apunto de eliminar tu cuenta ¿Estas seguro?</h2>
					<br>
					<!-- BOTON editar-->
					<div class=" offset-5 col-7">

						<button type="submit" id="eliminar" name="eliminar" class="btn btn-outline-danger	">eliminar</button>
					</div>
					<br>
				</form>
			</div>
		</div>
	</div>


</body>

</html>