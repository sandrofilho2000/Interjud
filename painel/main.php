<?php
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Painel</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link href="<?php echo INCLUDE_PATH_PAINEL;?>css/style.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_PAINEL;?>img/icone-painel.png" type="image-x/png" rel="shortcut icon">
</head>
<body>
	<header>
			<div class="icone-menu"></div>
			<div class="nome-painel-procurar">
				<div class="nome-painel">
					<h1><span class="color-blue">ADMIN</span> <?php echo NOME_EMPRESA?></h1>
				</div><!--nome-painel-->
				<div class="procurar">
					<input type="text" name="procurar" placeholder="procurar">
				</div>
			</div><!--nome-painel-procurar-->
			<div class="perfil-menu">
				<div class="msg">
					<!--<div class="alerta-notificacao">1</div>-->
					<div class="submenu-msg">
						<div class="titulo-msg">
							<h2>Você tem <span>0</span> Nova mensagem!</h2>
						</div><!--titulo-msg-->
						<!--
						<p>Administrador
							<hr>
							<span>Seja Bem vindo ao painel</span>
						</p>
						-->
					</div><!--submenu-msg-->
				</div><!--msg-->
				<div class="notificacao">
					<!--<div class="alerta-notificacao">3</div>-->
					<div class="submenu-notif">

						<div class="titulo-msg">
							<h2>Você tem <span>3</span> Novas notificação!</h2>
						</div><!--titulo-msg-->

						<p>Texto adicionado na página principal</p>
						<hr>
						<p>Texto adicionado na página principal</p>
						<hr>
						<p>Texto adicionado na página principal</p>
						<hr>
					</div><!--submenu-msg-->
				</div><!--notificacao-->
				<div class="perfil">
					<?php 
						if($_SESSION['img'] == ' '){
					?>
						<div class="icone-perfil">
							<img src="<?php echo INCLUDE_PATH_PAINEL?>img/icone-user.png">
						</div><!--icone-perfil-->
					<?php }else{ ?>
						<div class="icone-perfil">
							<img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img']?>">
						</div><!--icone-perfil-->
					<?php } ?>
					<div class="nome-perfil">
						<span><?php echo $_SESSION['nome']?></span>
						<span><?php echo pegaCargo($_SESSION['cargo'])?></span>
					</div><!--nome-perfil-->
					
					<div class="seta-baixo">
						<img src="<?php echo INCLUDE_PATH_PAINEL?>img/seta-baixo.png">
					</div><!--seta-baixo-->

					<div class="sub-menu-perfil">
						<ul>
							<li><img src="<?php echo INCLUDE_PATH_PAINEL?>img/config.png"><a href="<?php echo INCLUDE_PATH_PAINEL?>configuracao-geral">Configuração Geral</a></li>
							<li><img src="<?php echo INCLUDE_PATH_PAINEL?>img/icon-adm.png"><a href="<?php echo INCLUDE_PATH_PAINEL?>adm-painel">ADM Painel</a></li>
							<li><img src="<?php echo INCLUDE_PATH_PAINEL?>img/logout.png"><a href="<?php echo INCLUDE_PATH_PAINEL?>?loggout">Sair</a></li>
						</ul>
					</div><!--sub-menu-perfil-->
				</div><!--perfil-->
			</div>
			<div class="clear"></div>
	</header>

<div class="wraper-body">

	<aside>
		<div class="cadastro-aside">
			<h2>Gestão do Site</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-depoimentos">Gerenciar Depoimentos</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-vantagens">Gerenciar Vantagens</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-duvidas-frequentes">Gerenciar Duvidas Frequ.</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-imagens">Gerenciar Imagens</a>
			<a href="<?php echo INCLUDE_PATH_PAINEL?>configuracao-geral">Gerenciar Site</a>
		</div><!--cadastro-aside-->
		<div class="gestao-aside">
			<h2 class="gestao-adm">Administração do Painel</h2>
			<a href="<?php echo INCLUDE_PATH_PAINEL?>adm-painel">Gerenciar Usuário</a>
		</div>
	</aside>

	<div class="wraper-content">
		<div class="content">
			
			<?php Painel::carregarPagina();?>

		</div><!--content-->
		
	</div><!--content-->

</div><!--wraper-body-->

	<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH_PAINEL?>js/fade-menu.js"></script>
	<script src="<?php echo INCLUDE_PATH?>js/jquery.mask.js"></script>
	<script>
		$(function(){
			$('input[name=data]').mask('99/99/9999');
		})
	</script>

</body>
</html>