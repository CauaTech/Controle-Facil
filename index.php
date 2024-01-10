<?php 
$int = 0;
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
	<title>HomePage - Controle Facil</title>
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

<body>

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="header-homepage">
    <div class="container">
        <div class="header-card">
            <br>
            <center>
            <div class="header-text">
                <div class="header-title">
                    Precisa arrumar suas Finanças?
                </div>
                <div class="header-subtitle">
                    Transforme sua vida financeira com o ControleFácil. Simplifique suas finanças, acompanhe seus gastos e <br> conquiste seus objetivos financeiros de forma inteligente e descomplicada. Comece hoje a trilhar o caminho para <br> uma gestão financeira eficaz e tranquila. 
                </div>
                <div class="header-body">
                    <div class="input-head">
                        <div class="input-group mb-3 input-top">
                          <input type="text" class="form-control form-head" placeholder="Registre-se agora">
                          <button class="btn btn-financa" type="submit">Cadastrar</button>
                        </div>
                    </div>
                </div>
            </div>
            </center>
        </div>
    </div>
</div>
<div class="subheader-homepage">
	<div class="container">
		<div class="subheader-card">
			<br>
			<div class="subheader-text">
				<center>Organize suas finanças em apenas 5 minutos! Com o ControleFacil, você pode criar um <br>plano personalizado para gerenciar seu dinheiro de forma simples e rapida.
				</center>
			</div>
			<div class="subheader-button">
				<center>
					<div class="btn btn-financa">Criar Agora</div>
				</center>
			</div>
			<br>
		</div>
	</div>
</div>
<div class="parceiros-homepage">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="parceiros-title">
					<center>
						Parceiros
					</center>
				</div>
				<div class="parceiros-subtitle">
					<center>
						Parceiros Empresariais: Capacite seus colaboradores a conquistarem estabilidade financeira. Com o ControleFacil, ofereça uma ferramenta que permite aos seus funcionarios gerenciarem suas finanças de forma eficiente, reduzindo o estresse e aumentando o foco e a produtividade no trabalho.
					</center>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
						<div class="card card-homepage">
							<div class="card-body card-bhomepage">
								<center>
									<div class="icon-chomepage">
										<i class="fa-brands fa-google"></i>
									</div>
									<div class="title-icon">
										Google
									</div>
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-homepage">
							<div class="card-body card-bhomepage">
								<center>
									<div class="icon-chomepage">
										<i class="fa-brands fa-apple-pay"></i>
									</div>
									<div class="title-icon">
										Apple
									</div>
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-homepage">
							<div class="card-body card-bhomepage">
								<center>
									<div class="icon-chomepage">
										<i class="fa-brands fa-windows"></i>
									</div>
									<div class="title-icon">
										Microsoft
									</div>
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-homepage">
							<div class="card-body card-bhomepage">
								<center>
									<div class="icon-chomepage">
										<i class="fa-brands fa-facebook"></i>
									</div>
									<div class="title-icon">
										Facebook
									</div>
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-homepage">
							<div class="card-body card-bhomepage">
								<center>
									<div class="icon-chomepage">
										<i class="fa-brands fa-amazon"></i>
									</div>
									<div class="title-icon">
										Amazon
									</div>
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-homepage">
							<div class="card-body card-bhomepage">
								<center>
									<div class="icon-chomepage">
										<i class="fa-brands fa-youtube"></i>
									</div>
									<div class="title-icon">
										Youtube
									</div>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="planos">
	<div class="container">
		<div class="planos-header">
			<br>
			<center>
				<div class="planos-title">
					Nossos Planos
				</div>
				<div class="sub-title">
					Transforme sua vida Financeira: Adquira ControleFacil e <br> Conquiste a Libedade Financeira Hoje Mesmo! 
				</div>
			</center>
			<br>
		</div>
		<div class="planos-card">
			<div class="row">
				<div class="col-md-6">
					<div class="card card-plans">
						<div class="card-body cardb-plans">
							<div class="row">
								<div class="col-md-6">
									<div class="title-card">
										Basico
									</div>
									<div class="subtitle-card">
										Inicie sua jornada financeira <br> com o Essencial.
									</div>
								</div>
								<div class="col-md-6">
									<div class="price-plan">
										R$ 20.00
									</div>
									<div class="subtitle-price">
										Mensal
									</div>
									<div class="button-price">
										<div class="btn btn-price">Adquirir Agora</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card card-plans">
						<div class="card-body cardb-plans">
							<div class="row">
								<div class="col-md-6">
									<div class="title-card">
										Premium
									</div>
									<div class="subtitle-card">
										Maximize seu controle financeiro com recursos avançados 
									</div>
								</div>
								<div class="col-md-6">
									<div class="price-plan">
										R$ 70.00
									</div>
									<div class="subtitle-price">
										Mensal
									</div>
									<div class="button-price">
										<div class="btn btn-price">Adquirir Agora</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="comentarios">
	<div class="container">
		<center>
			<div class="comentarios-title">
				Comentarios
			</div>
		</center>
		<div class="comentarios-card">
			<div class="row">
				<div class="col-md-4">
					<div class="card card-comentario">
						<div class="card-body">
							<div class="icon-comentario">
								<i class="fa-solid fa-eye margin-icon"> 135</i>
								<i class="fa-solid fa-comment margin-icon"> 54</i>
							</div>
							<div class="comentario-text">
								Ajudou organizar minha casa, e comprei um carro novo.
							</div>
							<div class="comentario-date">
								26 de dezembro de 2024
							</div>
							<div class="comentario-autor">
								<i class="fa-solid fa-circle-user icon-autor"></i>
								Nome do autor
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-comentario">
						<div class="card-body">
							<div class="icon-comentario">
								<i class="fa-solid fa-eye margin-icon"> 135</i>
								<i class="fa-solid fa-comment margin-icon"> 54</i>
							</div>
							<div class="comentario-text">
								Ajudou organizar minha casa, e comprei um carro novo.
							</div>
							<div class="comentario-date">
								26 de dezembro de 2024
							</div>
							<div class="comentario-autor">
								<i class="fa-solid fa-circle-user icon-autor"></i>
								Nome do autor
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-comentario">
						<div class="card-body">
							<div class="icon-comentario">
								<i class="fa-solid fa-eye margin-icon"> 135</i>
								<i class="fa-solid fa-comment margin-icon"> 54</i>
							</div>
							<div class="comentario-text">
								Ajudou organizar minha casa, e comprei um carro novo.
							</div>
							<div class="comentario-date">
								26 de dezembro de 2024
							</div>
							<div class="comentario-autor">
								<i class="fa-solid fa-circle-user icon-autor"></i>
								Nome do autor
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="comentario-button">
				<center>
					<div class="btn btn-financa">Acessar X</div>
				</center>
			</div>
		</div>
	</div>
</div>
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>