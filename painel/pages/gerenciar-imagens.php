<?php
	$img_editar = Painel::select('tb_site.config_imagens');
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
			<span>/</span>
			<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
			<h2 class="active-btn">Editar Imagens</h2>
		</div><!--breadcrump-->
</div><!--wraper-titulo-->


<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Editar Home</h2>
	<?php
		if(isset($_POST['acao_editar_home'])){
			$imagem_atual = $_POST['imagem_atual'];
			$imagem = $_FILES['imagem_home'];

			if($imagem['name'] != ''){
				if(Painel::imagemValida($imagem)){
					Painel::deleteFile($imagem_atual);
					$imagem = Painel::uploadFile($imagem);
					$arr = ['home_bg'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
					Painel::update($arr);
					Painel::alert('sucesso','Home Editado Com Sucesso!');
					Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
				}else{
					Painel::alert('erro','O formato da imagem não é valida');
				}
			}else{
				Painel::alert('erro','Você precisa selecionar uma imagem!');
			}/*else{
				$imagem = $imagem_atual;
				$arr = ['icone_vantagens'=>$imagem,'nome_tabela'=>'tb_site.vantagens','titulo_vantagens'=>$titulo,'id'=>$id,'prg_vantagens'=>$prg_vantagens];
				Painel::update($arr);
				Painel::alert('sucesso','Vantagem Editado sem a foto e Sucesso!');
				$vantagens_editar = Painel::select('tb_site.vantagens','id = ?',array($id));
				Painel::redirect(INCLUDE_PATH_PAINEL.'editar-vantagens?id='.$id);
			}*/
		}
	?>
	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['home_bg']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_home" id="input-img" value="">
				<input type="hidden" name="imagem_atual" value="<?php echo $img_editar['home_bg']?>">
				<label style="left: 125px;" for="input-img" name="imagem_home"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_home','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Editar Portal de Créditos</h2>
	<?php
		if(isset($_POST['acao_editar_portal_img1'])){
			$imagem_atual_1 = $_POST['imagem_atual_1'];
			$imagem_novo_1 = $_FILES['imagen_novo_1'];
				
			if(Painel::imagemValida($imagem_novo_1)){
				Painel::deleteFile($imagem_atual_1);
				$imagem = Painel::uploadFile($imagem_novo_1);
				$arr = ['portal_creditos_img1'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Portal de Créditos Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da primeira imagem não é valida');
			}

		}

		if(isset($_POST['acao_editar_portal_img2'])){
			$imagem_atual_2 = $_POST['imagem_atual_2'];
			$imagem_novo_2 = $_FILES['imagem_novo_2'];
			 	
			if(Painel::imagemValida($imagem_novo_2)){
				Painel::deleteFile($imagem_atual_2);
				$imagem = Painel::uploadFile($imagem_novo_2);
				$arr = ['portal_creditos_img2'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Portal de Créditos Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da segunda imagem não é valida');
			}

		}

		if(isset($_POST['acao_editar_portal_img3'])){
			$imagem_atual_3 = $_POST['imagem_atual_3'];
			$imagem_novo_3 = $_FILES['imagem_novo_3'];
			 	
			if(Painel::imagemValida($imagem_novo_3)){
				Painel::deleteFile($imagem_atual_3);
				$imagem = Painel::uploadFile($imagem_novo_3);
				$arr = ['portal_creditos_img3'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Portal de Créditos Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}
	?>
	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['portal_creditos_img1']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_1" id="input-img-portal1" value="">
				<input type="hidden" name="imagem_atual_1" value="<?php echo $img_editar['portal_creditos_img1']?>">
				<label style="left: 125px;" for="input-img-portal1" name="imagem_novo_1"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_portal_img1','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group" style="height: auto;">
				<span>Foto:</span>
				<img style="width: 50px; background-color: #252525; position: relative;top:40px;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['portal_creditos_img2']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_novo_2" id="input-img-portal2" value="">
				<input type="hidden" name="imagem_atual_2" value="<?php echo $img_editar['portal_creditos_img2']?>">
				<label style="left: 125px;" for="input-img-portal2" name="imagem_novo_2"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_portal_img2','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group" style="height: auto;">
				<span>Foto:</span>
				<img style="width: 50px; background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['portal_creditos_img3']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_novo_3" id="input-img-portal3" value="">
				<input type="hidden" name="imagem_atual_3" value="<?php echo $img_editar['portal_creditos_img3']?>">
				<label style="left: 125px;" for="input-img-portal3" name="imagem_atual_3"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_portal_img3','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Editar Como Funciona</h2>
	<?php
		if(isset($_POST['acao_editar_como_funciona_img1'])){
			$imagem_atual_1 = $_POST['imagem_atual_1'];
			$imagem_novo_1 = $_FILES['imagen_novo_1'];
				
			if(Painel::imagemValida($imagem_novo_1)){
				Painel::deleteFile($imagem_atual_1);
				$imagem = Painel::uploadFile($imagem_novo_1);
				$arr = ['como_funciona_img1'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Como Funciona Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da primeira imagem não é valida');
			}

		}

		if(isset($_POST['acao_editar_como_funciona_img2'])){
			$imagem_atual_2 = $_POST['imagem_atual_2'];
			$imagem_novo_2 = $_FILES['imagen_novo_2'];
			 	
			if(Painel::imagemValida($imagem_novo_2)){
				Painel::deleteFile($imagem_atual_2);
				$imagem = Painel::uploadFile($imagem_novo_2);
				$arr = ['como_funciona_img2'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Como Funciona Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da segunda imagem não é valida');
			}

		}

		if(isset($_POST['acao_editar_como_funciona_img3'])){
			$imagem_atual_3 = $_POST['imagem_atual_3'];
			$imagem_novo_3 = $_FILES['imagen_novo_3'];
			 	
			if(Painel::imagemValida($imagem_novo_3)){
				Painel::deleteFile($imagem_atual_3);
				$imagem = Painel::uploadFile($imagem_novo_3);
				$arr = ['como_funciona_img3'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Como Funciona Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}

		if(isset($_POST['acao_editar_como_funciona_img4'])){
			$imagem_atual_4 = $_POST['imagem_atual_4'];
			$imagem_novo_4 = $_FILES['imagen_novo_4'];
			 	
			if(Painel::imagemValida($imagem_novo_4)){
				Painel::deleteFile($imagem_atual_4);
				$imagem = Painel::uploadFile($imagem_novo_4);
				$arr = ['como_funciona_img4'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Como Funciona Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}

		if(isset($_POST['acao_editar_como_funciona_img5'])){
			$imagem_atual_5 = $_POST['imagem_atual_5'];
			$imagem_novo_5 = $_FILES['imagen_novo_5'];
			 	
			if(Painel::imagemValida($imagem_novo_5)){
				Painel::deleteFile($imagem_atual_5);
				$imagem = Painel::uploadFile($imagem_novo_5);
				$arr = ['como_funciona_img5'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Como Funciona Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}

		if(isset($_POST['acao_editar_como_funciona_img6'])){
			$imagem_atual_6 = $_POST['imagem_atual_6'];
			$imagem_novo_6 = $_FILES['imagen_novo_6'];
			 	
			if(Painel::imagemValida($imagem_novo_6)){
				Painel::deleteFile($imagem_atual_6);
				$imagem = Painel::uploadFile($imagem_novo_6);
				$arr = ['como_funciona_img6'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Como Funciona Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}
	?>
	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['como_funciona_img1']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_1" id="input-img-como_funciona1" value="">
				<input type="hidden" name="imagem_atual_1" value="<?php echo $img_editar['como_funciona_img1']?>">
				<label style="left: 125px;" for="input-img-como_funciona1" name="imagem_novo_1"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_como_funciona_img1','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['como_funciona_img2']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_2" id="input-img-como_funciona2" value="">
				<input type="hidden" name="imagem_atual_2" value="<?php echo $img_editar['como_funciona_img2']?>">
				<label style="left: 125px;" for="input-img-como_funciona2" name="imagem_novo_2"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_como_funciona_img2','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['como_funciona_img3']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_3" id="input-img-como_funciona3" value="">
				<input type="hidden" name="imagem_atual_3" value="<?php echo $img_editar['como_funciona_img3']?>">
				<label style="left: 125px;" for="input-img-como_funciona3" name="imagem_novo_3"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_como_funciona_img3','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['como_funciona_img4']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_4" id="input-img-como_funciona4" value="">
				<input type="hidden" name="imagem_atual_4" value="<?php echo $img_editar['como_funciona_img4']?>">
				<label style="left: 125px;" for="input-img-como_funciona4" name="imagem_novo_4"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_como_funciona_img4','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['como_funciona_img5']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_5" id="input-img-como_funciona5" value="">
				<input type="hidden" name="imagem_atual_5" value="<?php echo $img_editar['como_funciona_img5']?>">
				<label style="left: 125px;" for="input-img-como_funciona5" name="imagem_novo_5"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_como_funciona_img5','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['como_funciona_img6']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_6" id="input-img-como_funciona6" value="">
				<input type="hidden" name="imagem_atual_6" value="<?php echo $img_editar['como_funciona_img6']?>">
				<label style="left: 125px;" for="input-img-como_funciona6" name="imagem_novo_6"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_como_funciona_img6','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

</div><!--box-content-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Editar Sobre Nós</h2>
	<?php
		if(isset($_POST['acao_editar_sobrenos_img1'])){
			$imagem_atual_1 = $_POST['imagem_atual_1'];
			$imagem_novo_1 = $_FILES['imagen_novo_1'];
				
			if(Painel::imagemValida($imagem_novo_1)){
				Painel::deleteFile($imagem_atual_1);
				$imagem = Painel::uploadFile($imagem_novo_1);
				$arr = ['sobrenos_img1'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Sobre Nós Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da primeira imagem não é valida');
			}

		}

		if(isset($_POST['acao_editar_sobrenos_img2'])){
			$imagem_atual_2 = $_POST['imagem_atual_2'];
			$imagem_novo_2 = $_FILES['imagem_novo_2'];
			 	
			if(Painel::imagemValida($imagem_novo_2)){
				Painel::deleteFile($imagem_atual_2);
				$imagem = Painel::uploadFile($imagem_novo_2);
				$arr = ['sobrenos_img2'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Sobre Nós Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da segunda imagem não é valida');
			}

		}

		if(isset($_POST['acao_editar_sobrenos_img3'])){
			$imagem_atual_3 = $_POST['imagem_atual_3'];
			$imagem_novo_3 = $_FILES['imagem_novo_3'];
			 	
			if(Painel::imagemValida($imagem_novo_3)){
				Painel::deleteFile($imagem_atual_3);
				$imagem = Painel::uploadFile($imagem_novo_3);
				$arr = ['sobrenos_img3'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Sobre Nós Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}

		if(isset($_POST['acao_editar_sobrenos_img4'])){
			$imagem_atual_3 = $_POST['imagem_atual_4'];
			$imagem_novo_3 = $_FILES['imagem_novo_4'];
			 	
			if(Painel::imagemValida($imagem_novo_3)){
				Painel::deleteFile($imagem_atual_3);
				$imagem = Painel::uploadFile($imagem_novo_3);
				$arr = ['sobrenos_img4'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Sobre Nós Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}

		if(isset($_POST['acao_editar_sobrenos_img5'])){
			$imagem_atual_3 = $_POST['imagem_atual_5'];
			$imagem_novo_3 = $_FILES['imagem_novo_5'];
			 	
			if(Painel::imagemValida($imagem_novo_3)){
				Painel::deleteFile($imagem_atual_3);
				$imagem = Painel::uploadFile($imagem_novo_3);
				$arr = ['sobrenos_img5'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
				Painel::update($arr);
				Painel::alert('sucesso','Página Sobre Nós Editado Com Sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
			}else{
				Painel::alert('erro','O formato da terceira imagem não é valida');
			}
		}
	?>
	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['sobrenos_img1']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagen_novo_1" id="input-img-sobrenos1" value="">
				<input type="hidden" name="imagem_atual_1" value="<?php echo $img_editar['sobrenos_img1']?>">
				<label style="left: 125px;" for="input-img-sobrenos1" name="imagem_novo_1"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_sobrenos_img1','Editar')?>>
			
			</div><!--from-group-->

		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group" style="height: auto;">
				<span>Foto:</span>
				<img style="width: 50px; background-color: #252525; position: relative;top:40px;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['sobrenos_img2']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_novo_2" id="input-img-sobrenos2" value="">
				<input type="hidden" name="imagem_atual_2" value="<?php echo $img_editar['sobrenos_img2']?>">
				<label style="left: 125px;" for="input-img-sobrenos2" name="imagem_novo_2"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_sobrenos_img2','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group" style="height: auto;">
				<span>Foto:</span>
				<img style="width: 50px; background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['sobrenos_img3']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_novo_3" id="input-img-sobrenos3" value="">
				<input type="hidden" name="imagem_atual_3" value="<?php echo $img_editar['sobrenos_img3']?>">
				<label style="left: 125px;" for="input-img-sobrenos3" name="imagem_atual_3"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_sobrenos_img3','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group" style="height: auto;">
				<span>Foto:</span>
				<img style="width: 50px; background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['sobrenos_img4']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_novo_4" id="input-img-sobrenos4" value="">
				<input type="hidden" name="imagem_atual_4" value="<?php echo $img_editar['sobrenos_img4']?>">
				<label style="left: 125px;" for="input-img-sobrenos4" name="imagem_atual_4"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_sobrenos_img4','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group" style="height: auto;">
				<span>Foto:</span>
				<img style="width: 50px; background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['sobrenos_img5']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_novo_5" id="input-img-sobrenos5" value="">
				<input type="hidden" name="imagem_atual_5" value="<?php echo $img_editar['sobrenos_img5']?>">
				<label style="left: 125px;" for="input-img-sobrenos5" name="imagem_atual_5"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_sobrenos_img5','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Editar Contato</h2>
	<?php
		if(isset($_POST['acao_editar_contato'])){
			$imagem_atual = $_POST['imagem_atual'];
			$imagem = $_FILES['imagem_login'];

			if($imagem['name'] != ''){
				if(Painel::imagemValida($imagem)){
					Painel::deleteFile($imagem_atual);
					$imagem = Painel::uploadFile($imagem);
					$arr = ['fundo_login'=>$imagem,'nome_tabela'=>'tb_site.config_imagens','id'=>'0'];
					Painel::update($arr);
					Painel::alert('sucesso','Contato Editado Com Sucesso!');
					Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-imagens');
				}else{
					Painel::alert('erro','O formato da imagem não é valida');
				}
			}else{
				Painel::alert('erro','Você precisa selecionar uma imagem!');
			}/*else{
				$imagem = $imagem_atual;
				$arr = ['icone_vantagens'=>$imagem,'nome_tabela'=>'tb_site.vantagens','titulo_vantagens'=>$titulo,'id'=>$id,'prg_vantagens'=>$prg_vantagens];
				Painel::update($arr);
				Painel::alert('sucesso','Vantagem Editado sem a foto e Sucesso!');
				$vantagens_editar = Painel::select('tb_site.vantagens','id = ?',array($id));
				Painel::redirect(INCLUDE_PATH_PAINEL.'editar-vantagens?id='.$id);
			}*/
		}
	?>
	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Foto:</span>
				<img style="width: 50px; vertical-align: middle;background-color: #252525;" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $img_editar['fundo_login']?>"/>
				<input style="width: calc(100% - 120px)" type="file" name="imagem_login" id="input-img-login" value="">
				<input type="hidden" name="imagem_atual" value="<?php echo $img_editar['fundo_login']?>">
				<label style="left: 125px;" for="input-img-login" name="imagem_login"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_editar_contato','Editar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->