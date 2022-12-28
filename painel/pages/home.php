<?php

	if(isset($_GET['excluir'])){
		$idExcluir = intval($_GET['excluir']);
		$selectImagem = Mysql::conectar()->prepare("SELECT img FROM `tb_admin.usuario` WHERE id = ?");
		$selectImagem->execute(array($_GET['excluir']));
		$imagem = $selectImagem->fetch()['img'];
		Painel::deleteFile($imagem);
		Painel::deletar('tb_admin.usuario',$idExcluir);
		Painel::redirect(INCLUDE_PATH_PAINEL.'home');
	}
	
	$usuariosOnline = Painel::listarUsuariosOnline();

	$listarUsuariosTotais = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
	$listarUsuariosTotais->execute();
	$listarUsuariosTotais = $listarUsuariosTotais->rowCount();

	$listarUsuariosHoje = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
	$listarUsuariosHoje->execute(array(date('Y-m-d')));
	$listarUsuariosHoje = $listarUsuariosHoje->rowCount();

	$usuariosDoPainel = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.usuario`");
	$usuariosDoPainel->execute();
	$usuariosDoPainel = $usuariosDoPainel->fetchAll();

?>
<div class="wraper-titulo">
				<div class="titulo-content">
					<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/notebook.png">
					<h2>Painel de Controle</h2>
				</div><!--titulo-content-->
				<div class="breadcrump">
				<a href="<?php echo INCLUDE_PATH_PAINEL?>index.php">
					<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/home.png">
					<h2 class="active-btn">Home</h2>
				</a>
					<span>/</span>
					<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/notebook.png">
					<h2>Painel de Controle</h2>
				</div><!--breadcrump-->
</div><!--wraper-titulo-->
		<div class="wraper-box-dinamico">

				<div class="box-online">
					<a href="<?php echo INCLUDE_PATH_PAINEL?>usuarios-online">
						<div class="box-online-inside">
							<p>Usuarios Online</p>
							<span><?php echo count($usuariosOnline)?></span>
						</div><!--box-online-inside-->
					</a>
				</div><!--box-online-->
				<div class="box-visita">
					<div class="box-online-inside">
						<p>Total de Visitas</p>
						<span><?php echo $listarUsuariosTotais?></span>
					</div><!--box-online-inside-->
				</div><!--box-visita-->
				<div class="box-hoje">
					<div class="box-online-inside">
						<p>Visitas Hoje</p>
						<span><?php echo $listarUsuariosHoje?></span>
					</div><!--box-online-inside-->
				</div><!--box-hoje-->

</div><!--wraper-box--dinamico-->

<div class="box-content usuario">

	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/usuarios-do-painel.png">
	<h2>Usuários do Painel</h2>
	<div class="lapis-home-box">
		<img class="lapis-home" src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
		<a class="link-lapis" href="<?php echo INCLUDE_PATH_PAINEL?>adm-painel">Editar Usuários</a>
	</div>

	<div class="wraper-box-dinamico">

				<div class="titulo-tabela">
					<div class="titulo-parte w33">
						<h3>Nome</h3>
					</div><!--titulo-parte-->
					<div class="titulo-parte w33">
						<h3>Cargo</h3>
					</div><!--titulo-parte-->
					<div class="titulo-parte w33">
					 	<h3 style="text-align: center;">Deletar</h3>
					 </div><!--titulo-parte-->
					
					<div class="clear"></div>
				</div><!--titulo-tabela-->

		<?php
			foreach($usuariosDoPainel as $key => $value){
		?>
				<div class="conteudo-tabela tabela-cargo">
					<div class="w33">
						<span><?php echo $value['nome']?></span>
					</div><!--w33-->
					<div class="w33">
						<span><?php echo pegaCargo($value['cargo'])?></span>
					</div><!--w33-->
					<div class="w33" style="text-align: center;">
						<a <?php
							if($_SESSION['cargo'] > $value['cargo']){
						  ?>
						  actionBtn="delete" href="<?php echo INCLUDE_PATH_PAINEL?>home?excluir=<?php echo $value["id"]?>"
						  <?php }else{ ?> 
						  	actionBtn="negado" href="#"
						  <?php } ?>
						  >

						<img style="width: 20px;" src='img/excluir-depoimento-red.png'></a>
					</div><!--w33-->
					<div class="clear"></div>
				</div><!--conteudo-tabela-->
		<?php } ?>
	</div><!--wraper-box--dinamico-->

</div><!--box-content-->