<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$vantagens_editar = Painel::select('tb_site.vantagens','id = ?',array($id));
	}else{
		Painel::alert('erro','Você Precisa Passar o ID!');
		die();
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
		<a href="<?php echo INCLUDE_PATH_PAINEL?>gerenciar-vantagens">
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/listar.png">
			<h2>Gerenciar Vantagens</h2>
		</a>
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
			<h2 class="active-btn">Editar Vantagens</h2>
		</div><!--breadcrump-->
</div><!--wraper-titulo-->

<?php include('pages/listar-vantagens.php')?>

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Editar Vantagens</h2>
	<?php
		if(isset($_POST['acao_editar'])){
			$imagem_atual = $_POST['imagem_atual'];
			$imagem = $_FILES['icone_vantagens'];
			$titulo = $_POST['titulo_vantagens'];
			$prg_vantagens = $_POST['prg_vantagens'];

			if($imagem['name'] != ''){
				if(Painel::imagemValida($imagem)){
					Painel::deleteFile($imagem_atual);
					$imagem = Painel::uploadFile($imagem);
					$arr = ['icone_vantagens'=>$imagem,'nome_tabela'=>'tb_site.vantagens','titulo_vantagens'=>$titulo,'id'=>$id,'prg_vantagens'=>$prg_vantagens];
					Painel::update($arr);
					Painel::alert('sucesso','Vantagem Editado com a foto Com Sucesso!');
					$vantagens_editar = Painel::select('tb_site.vantagens','id = ?',array($id));
					Painel::redirect(INCLUDE_PATH_PAINEL.'editar-vantagens?id='.$id);
				}else{
					Painel::alert('erro','O formato da imagem não é valida');
				}
			}else{
				$imagem = $imagem_atual;
				$arr = ['icone_vantagens'=>$imagem,'nome_tabela'=>'tb_site.vantagens','titulo_vantagens'=>$titulo,'id'=>$id,'prg_vantagens'=>$prg_vantagens];
				Painel::update($arr);
				Painel::alert('sucesso','Vantagem Editado sem a foto e Sucesso!');
				$vantagens_editar = Painel::select('tb_site.vantagens','id = ?',array($id));
				Painel::redirect(INCLUDE_PATH_PAINEL.'editar-vantagens?id='.$id);
			}
		}
	?>
	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Icone:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $vantagens_editar['icone_vantagens']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="icone_vantagens" id="input-img" value="<?php echo $_SESSION['img'];?>">
				<input type="hidden" name="imagem_atual" value="<?php echo $vantagens_editar['icone_vantagens'];?>">
				<label style="left: 125px;" for="input-img" name="imagem"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				<span>Titulo:</span>
				<input type="text" name="titulo_vantagens" required value="<?php echo $vantagens_editar['titulo_vantagens']?>">
			</div><!--from-group-->
			<div class="form-group group-textarea">
				<span style="vertical-align: top;">Texto:</span>
				<textarea style="width: calc(100% - 65px)" name="prg_vantagens" required><?php echo $vantagens_editar['prg_vantagens']?></textarea>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->