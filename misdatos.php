<?php
session_start();
require_once 'cnn.php';
require_once 'cdn.html';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>mis datos</title>
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
			<!-- FORM-->
			<form id="" name="from1" action="" method="post">
				<!-- MI SESION-->
				<div class="gris" class="input-group flex-nowrap">
					<span class="input-group-text" id="addon-wrapping">
						<i class="fas fa-user"></i>&nbsp;Sesion De
						<?php echo ucwords($_SESSION['name']); ?>
					</span>
				</div>
			</form><!-- FORM-->
		</div>
		</div><!-- Collapsible wrapper -->
		</div><!-- Container wrapper -->
	</nav><!-- Navbar -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-2">

			</div>
			<div class="col-9">

				<!-- INICIO SESION-->
				<!-- FORM-->
				<form method="POST" id="loginform">
					<!-- MIS TARJETAHABIENTES-->
					<div class="gris" class="input-group flex-nowrap">
						<span class="input-group-text" id="addon-wrapping">
							<i class="fas fa-id-card">Mis Datos</i>
						</span>
					</div>
					<!-- TABLA-->
					<table class="table  ">
						<thead class="table-dark">
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Celular</th>
								<th scope="col">Email</th>
								<th scope="col">Ingreso</th>
								<th scope="col">Contraseña</th>
								<th scope="col">Editar</th>
								<th scope="col">Eliminar </th>
							</tr>
						</thead>
						<!--MOSTRAR DATOS EN TABLA-->
						<?php
						include 'cnn.php'; {
						?>
							<tr>
								<td><?php echo ucwords($_SESSION['name']); ?></td>
								<td><?php echo ucwords($_SESSION['celular']); ?></td>
								<td><?php echo ucwords($_SESSION['email']); ?></td>
								<td><?php echo ucwords($_SESSION['ingreso']); ?></td>
								<td><?php echo ucwords($_SESSION['password']); ?></td>
								<td><a href="editar.php">Editar</a></td>
								<td><a href="eliminar.php">Eliminar Cuenta</a></td>






							</tr>
						<?php
						}
						?>
					</table>
					<br>
				</form><!-- FORM-->
				<br>

				<div class=" offset-10 col-3">
					<a href="cerrar.php" style="letter-spacing: 3px;">
						<button type="button" class="btn btn-outline-danger" data-mdb-ripple-color="dark">Cerar Sesión <i class="ace-icon fa fa-power-off"></i></button>
					</a>
				</div>

			</div><!-- COL-6-->

		</div><!-- ROW -->
	</div>



</body>

</html>