<?php
require_once 'cnn.php';
require_once 'cdn.html';

?>
<?php
//Valida que el usuario hizo clik en el Boton 
if (isset($_POST['enviar'])) {
	//Trae datos del formulario
	$name = $_POST['name'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$ingreso = $_POST['ingreso'];
	$password = $_POST['password'];
	$status = "Activo";
	//Validar que las cajas no esten vacias
	if (!empty($name) && !empty($celular) && !empty($email) && !empty($ingreso)  && !empty($password) && !empty($status)) {
		//Insertar datos en la tabla de la db  
		$sql = $cnnPDO->prepare("INSERT INTO usuarios
  		(name, celular, email, ingreso, password, status) VALUES (:name, :celular, :email, :ingreso,  :password,  :Activo   )");
		//Asignar las variables a los campos de la tabla
		$sql->bindParam(':name', $name);
		$sql->bindParam(':celular', $celular);
		$sql->bindParam(':email', $email);
		$sql->bindParam(':ingreso', $ingreso);
		$sql->bindParam(':password', $password);
		$sql->bindParam(':Activo', $status);
		//Ejecutar la variable $sql
		$sql->execute();
		unset($sql);
		unset($cnnPDO);
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
			<!-- Left links -->
			<div class="d-flex align-items-center">
				<a href="email.php">
					<button type="button" class="btn btn-link px-3 me-2">
						Iniciar Sesion
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
	</nav><!-- Navbar -->
	<br>
	<div class="container">
		<div class="row">
			<div class="col-2">

			</div>
			<div class="col-8">
				<!-- icons-->
				<div class="gris" class="input-group flex-nowrap">
					<span class="input-group-text" id="addon-wrapping">
						<i class="fas fa-key">Registrarse</i>
					</span>
				</div>

				<!-- FORM-->
				<form action="<?php $_SERVER['PHP_SELF'] ?>" autocomplete="off" class="form-horizontal" id="loginform" method="POST" role="form">

					<br>
					<!-- NAME-->
					<div class=" offset-2 col-10">
						<label for="usuario">Nombre Completo:</label><input type="text" id="nombre" name="name" value="" size="36" placeholder="">
						<br>
						<br>
					</div>
					<!-- Celular-->
					<div class=" offset-2 col-10   ">
						<label for="usuario">Celular: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label><input type="text" id="celular" name="celular" value="" size="36" placeholder="">
						<br>
						<br>
					</div>
					<!-- EMAIL-->
					<div class=" offset-2 col-8">
						<label for="usuario">Email:&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label><input type="email" id="email" name="email" value="" size="36" placeholder="">
						<br>
						<br>
					</div>
					<!-- Ingreso Mensual-->
					<div class=" offset-2 col-10">
						<label for="usuario">Ingreso mensual: &nbsp;&nbsp;</label><input type="text" id="ingreso" name="ingreso" value="" size="36" placeholder="">
						<br>
						<br>
					</div>
					<!-- CONTRASEÑA-->
					<div class=" offset-2 col-8">
						<label for="password">Contraseña: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
						<input type="password" id="password" name="password" size="36" placeholder="">
						<br>
						<br>
					</div>
					<!-- BOTON CREAR-->
					<div class=" offset-5 col-7">
						<input type="submit" name="enviar" value="Crear Cuenta">
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
			<p>Copyright © 2016 Sí Vale México S.A. de C.V.</p>
		</center>
	</footer>
</body>

</html>