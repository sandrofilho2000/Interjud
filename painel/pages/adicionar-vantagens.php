
<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/lapis.png">
	<h2>Adicionar Vantagens</h2>
		<?php
		if(isset($_POST['acao_adicionar'])){
			$icone = $_FILES['icone_adicionar'];
			$titulo = $_POST['titulo_vantagens'];
			$paragrafo = $_POST['prg_vantagens'];
	
			if($icone['name'] == ''){
				Painel::alert('erro','Adicione um icone para continuar');
			}else if($titulo == ''){
				Painel::alert('erro','Adicione um titulo para continuar');
			}else if($paragrafo == ''){
				Painel::alert('erro','Adicione um paragrafo para continuar');
			}else{
				if(Painel::imagemValida($icone) == true){
					$icone = Painel::uploadFile($icone);
					$arr = ['icone_vantagens'=>$icone,'nome_tabela'=>'tb_site.vantagens','titulo_vantagens'=>$titulo,'prg_vantagens'=>$paragrafo,'order_id'=>'0'];
					Painel::insert($arr);
					Painel::alert('sucesso','Vantagem Adicionado Com Sucesso!');
					Painel::redirect(INCLUDE_PATH_PAINEL.'gerenciar-vantagens');
				}else{
					Painel::alert('erro','O formato da Imagem Não é Valida');
				}

			}
		}
	?>

	<div class="form-editar">
		<form method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<span>Icone:</span>
				<input type="file" name="icone_adicionar" id="input-img-adicionar" required>
				<label for="input-img-adicionar" name="imagem_adicionar"><img src="<?php echo INCLUDE_PATH_PAINEL?>img/enviar-img.png"></label>
			</div><!--from-group-->
			<div class="form-group">
				<span>Titulo:</span>
				<input type="text" name="titulo_vantagens" required>
			</div><!--from-group-->
			<div class="form-group group-textarea">
				<span style="vertical-align: top;">Texto:</span>
				<textarea style="width: calc(100% - 65px)" name="prg_vantagens" required></textarea>
			</div><!--from-group-->
			
			<div class="form-group">
				
				<input <?php permissaoInput(1,'acao_adicionar','Adicionar')?>>
			
			</div><!--from-group-->
		</form>
	</div><!--form-editar-->

</div><!--box-content-->
