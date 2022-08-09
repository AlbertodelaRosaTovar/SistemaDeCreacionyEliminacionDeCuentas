<?php
session_start();
require_once "cdn.html";
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

		</div>
		</div><!-- Collapsible wrapper -->
		</div><!-- Container wrapper -->
	</nav><!-- Navbar -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-1">

			</div>
			<div class="col-12">

				<!-- INICIO SESION-->
				<!-- FORM-->
				<form method="POST" id="loginform">
					<!-- Usuarios Registrados-->
					<div class="gris" class="input-group flex-nowrap">
						<span class="input-group-text" id="addon-wrapping">
							<i class="fas fa-key">&nbsp;Usuarios Registrados</i>
						</span>
					</div>
					<!-- TABLA-->
					<table class="table table-hover">
						<thead>
							<tr>

								<th scope="col">Correo</th>
								<th scope="col">Nombre</th>
								<th scope="col">Celular</th>
								<th scope="col">Ingreso</th>
								<th scope="col">Contraseña</th>
								<th scope="col">Status</th>
							</tr>
						</thead>

						<!--MOSTRAR DATOS EN TABLA-->
						<?php
						include 'cnn.php';
						$sentencia = $cnnPDO->query("SELECT * from usuarios");
						$resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
						?>
						<?php
						foreach ($resultado as $dato) {
						?>
							<tr>

								<td><?php echo $dato->email; ?></td>
								<td><?php echo $dato->name; ?></td>
								<td><?php echo $dato->celular; ?></td>
								<td><?php echo $dato->ingreso; ?></td>
								<td><?php echo $dato->password; ?></td>
								<td><?php echo $dato->status; ?></td>

							</tr>
						<?php
						} ?>
					</table>
					<br>
				</form><!-- FORM-->

				<div class=" offset-10 col-2">
					<a href="index.php" style="letter-spacing: 3px;">
						<button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark">Volver</button>
					</a>
				</div>
			</div><!-- COL-6-->
		</div><!-- ROW -->
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