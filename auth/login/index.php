<?php 
$int = 2;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>Login</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="Bem-vindo ao site da nossa empresa de criação de sites! Somos especializados em oferecer soluções web personalizadas e de alta qualidade para atender às necessidades específicas de cada um de nossos clientes.">
	
	<meta name="robots" content="all">
	<meta name="author" content="M0rx">

	<meta name="keywords" content="Stack, StackStore, Comprar site, preciso de um site, criador de site, programador">

	<link rel="canonical" href="https://stackstore.com.br"/>
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body class="background-login">

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php #include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->

<div class="login-page">
	<div class="container">
		<div class="card card-login">
			<div class="row">
				<div class="col-md-6">
					<div class="login-img">
						<img src="<?php echo $flow ?>assents/img/banner.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<div class="login-texts">
							<div class="login-title">
								Entrar
							</div>
							<div class="login-subtitle">
								Entre para Transformar sua Jornada Financeira
							</div>
							<div class="login-inputs">
								<label class="input-text">Email</label>
								<input type="email" class="form-control form-login" required name="">
							</div>
							<div class="login-inputs">
								<label class="input-text">Password</label>
								<input type="email" class="form-control form-login" required name="">
							</div>
							<div class="login-inputs">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something">
								  <label class="form-check-label">Lembrar de mim</label>
								</div>
							</div>
							<div class="login-inputs">
								<a class="input-links" href="#">Esqueci minha senha</a>
							</div>
							<div class="login-inputs">
								<button class="btn btn-login">Entrar</button>
							</div>
							<div class="login-inputs">
								<center>
									<a href="#" class="input-link">Montar seu financeiro em 5 minutos</a>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>