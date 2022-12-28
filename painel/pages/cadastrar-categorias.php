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
		<span>/</span>
		<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
		<h2 class="active-btn">Cadastrar Categorias</h2>
	</div><!--breadcrump-->
</div><!--wraper-titulo-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Cadastrar Categoria</h2>
		<?php
		if(isset($_POST['acao_adicionar'])){
			$verificar = Mysql::conectar()->prepare("SELECT * FROM `tb_site.categorias` WHERE nome = ?");
			$verificar->execute(array($_POST['nome']));
			if($verificar->rowCount() == 1){
				Painel::alert('erro','Já existe uma categoria com este nome!');
				die();
			}else{
				$slug = Painel::generateSlug($_POST['nome']);
				$arr = ['nome'=>$_POST['nome'],'slug'=>$slug,'nome_tabela'=>'tb_site.categorias','order_id'=>'0'];
				Painel::insert($arr);
				Painel::alert('sucesso','Categoria cadastrada Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'cadastrar-categorias');

			}
		}
	?>

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group cadastrar-group">
				<span class="span-categoria">Nome da Categoria:</span>
				<input class="input-categoria" type="text" name="nome" required>
			</div><!--from-group-->
			<div class="form-group cadastrar-group">
				
				<input <?php permissaoInput(1,'acao_adicionar','Cadastrar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->
