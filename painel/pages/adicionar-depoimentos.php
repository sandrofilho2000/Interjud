
<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Adicionar Depoimentos</h2>
	<?php
		if(isset($_POST['acao_adicionar'])){
			$nome = $_POST['nome'];
			$depoimento = $_POST['depoimento'];
			$imagem = $_FILES['foto'];
	
			if($nome == ''){
				Painel::alert('erro','Adicione um nome para continuar');
			}else{
				if(Painel::imagemValida($imagem) == true){
					$imagem = Painel::uploadFile($imagem);
					$arr = ['nome'=>$nome,'depoimento'=>$depoimento,'nome_tabela'=>'tb_site.depoimentos','foto'=>$imagem,'order_id'=>'0'];
					Painel::insert($arr);
					Painel::alert('sucesso','Depoimento Adicionado Com Sucesso!');
					Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-depoimentos');
				}else{
					Painel::alert('erro','O formato da Imagem Não é Valida');
				}

			}
		}
	?>
	<div class="form-editar cadastro-depoimentos">
		<form method="POST" enctype="multipart/form-data">
			<div class="group-depoimento">
				<span>Nome:</span>
				<input type="text" name="nome" required>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align: top;">Depoimento:</span>
				<textarea name="depoimento" required></textarea>
			</div><!--from-group-->
			<div class="group-depoimento form-group form-img">
				<span>Foto:</span>
				<input type="file" name="foto" id="input-img" required>
				<label class="label-depoimentos" for="input-img" name="foto"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="group-depoimento">
				<input <?php permissaoInput(1,'acao_adicionar','Adicionar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->
<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>