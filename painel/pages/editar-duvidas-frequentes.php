<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$duvida_editar = Painel::select('tb_site.duvfrequentes','id = ?',array($id));
	}else{
		Painel::alert('erro','Você Precisa Passar o ID!');
	}
?>

<div class="wraper-titulo">
		<div class="titulo-content">
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/notebook.png">
			<h2>Painel de Controle</h2>
		</div><!--titulo-content-->
		<div class="breadcrump">
		<a href="<?php echo INCLUDE_PATH_PAINEL?>index.php">
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/home.png">
			<h2>Home</h2>
		</a>
		<a href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-duvidas-frequentes">
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/listar.png">
			<h2>Gerenciar Dúvidas Frequêntes</h2>
		</a>
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
			<h2 class="active-btn">Editar Dúvidas Frequêntes</h2>
		</div><!--breadcrump-->
</div><!--wraper-titulo-->

<?php include('pages/listar-duvidas-frequentes.php')?>

	<div class="box-content" style="margin-top:40px;">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
	<h2>Editar Dúvidas Frequêntes</h2>

	<?php
		if(isset($_POST['acao_editar'])){
			if(Painel::update($_POST)){
				Painel::alert('sucesso','Depoimento Atualizado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'editar-duvidas-frequentes?id='.$id);
			}else{
				Painel::alert('erro','Campos Vazios não sao Permitidos!');
			}
		}
	?>

	<div class="form-editar cadastro-depoimentos">
		<form method="POST" enctype="multipart/form-data">
			<div class="group-depoimento group-textarea">
				<span style="vertical-align: top;">Dúvida:</span>
				<input type="text" name="duvida" required value="<?php echo $duvida_editar['duvida'] ?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align: top;">Resposta:</span>
				<textarea name="resposta" required><?php echo $duvida_editar['resposta'] ?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento">
				<input type="hidden" name="id" value="<?php echo $duvida_editar['id'] ?>">
				<input type="hidden" name="nome_tabela" value="tb_site.duvfrequentes">
				<input <?php permissaoInput(1,'acao_editar','Editar') ?> />
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->
<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
