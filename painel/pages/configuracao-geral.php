<?php
	$config = Painel::select('tb_site.config_home',false);
	$config_portal = Painel::select('tb_site.config_portal_de_creditos',false);
	//$config_vendedor = Painel::select('tb_site.config_vendedor',false);
	//$config_investidor = Painel::select('tb_site.config_investidor',false);
	$config_como_funciona = Painel::select('tb_site.config_como_funciona',false);
	$config_sobrenos = Painel::select('tb_site.config_sobrenos',false);
?>
<div class="wraper-titulo">
	<div class="titulo-content">
		<img style="position:relative;top:5px;" src="<?php echo INCLUDE_PATH_PAINEL?>img/config.png">
		<h2>Configuração Geral</h2>
	</div><!--titulo-content-->
	<div class="breadcrump">
	<a href="<?php echo INCLUDE_PATH_PAINEL?>index.php">
		<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/home.png">
		<h2>Home</h2>
	</a>
		<span>/</span>
		<img src="<?php echo INCLUDE_PATH_PAINEL?>img/config.png">
		<h2 class="active-btn">Configuração Geral</h2>
	</div><!--breadcrump-->
</div><!--wraper-titulo-->

<?php permissaoPagina(1)?>

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
	<h2>Editar Site Página Principal</h2>

	<?php
			/*
			$imagem_autor_novo = $_FILES['imagem_autor_novo'];
			$imagem_autor_atual = $_POST['imagem_autor_atual'];
			$imagem_especial_novo1 = $_FILES['imagem_especial_novo1'];
			$imagem_especial_atual1 = $_POST['imagem_especial_atual1'];
			$titulo_especial1 = $_POST['titulo_especial1'];
			$descricao_especial1 = $_POST['descricao_especial1'];
			$imagem_especial_novo2 = $_FILES['imagem_especial_novo2'];
			$imagem_especial_atual2 = $_POST['imagem_especial_atual2'];
			$titulo_especial2 = $_POST['titulo_especial2'];
			$descricao_especial2 = $_POST['descricao_especial2'];
			$imagem_especial_novo3 = $_FILES['imagem_especial_novo3'];
			$imagem_especial_atual3 = $_POST['imagem_especial_atual3'];
			$titulo_especial3 = $_POST['titulo_especial3'];
			$descricao_especial3 = $_POST['descricao_especial3'];
			$nome_tabela = $_POST['nome_tabela'];

			$titulo = $_POST['titulo'];
			$nome_autor = $_POST['nome_autor'];
			$descricao_autor = $_POST['descricao_autor'];
			$img_autor
			$img_especial1
			$titulo_especial1
			$descricao_especial1
			$img_especial2
			$titulo_especial2
			$descricao_especial2
			$img_especial3
			$titulo_especial3
			$descricao_especial3
			*/
		if(isset($_POST['acao_editar_home'])){
			if(Painel::updateConfig($_POST)){;
				Painel::alert('sucesso','Site Atualizado com sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'configuracao-geral');
			}else{
				Painel::alert('Campos Vazios não são permitidos!');
			}
		}
	
	?>

	<div class="form-editar cadastro-depoimentos">
		<form method="POST" enctype="multipart/form-data">
			<div class="group-depoimento group-textarea">
				<span>Titulo:</span>
				<input type="text" name="titulo" value="<?php echo $config['titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Opacidade:</span>
				<select name="overlay_banner" class="select-config">
					<option disabled selected>Escolha em %</option>
					<option value="0.1">10%</option>
					<option value="0.2">20%</option>
					<option value="0.3">30%</option>
					<option value="0.4">40%</option>
					<option value="0.5">50%</option>
					<option value="0.6">60%</option>
					<option value="0.7">70%</option>
					<option value="0.8">80%</option>
					<option value="0.9">90%</option>
					<option value="1.0">100%</option>
				</select>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Titulo Banner:</span>
				<input type="text" name="titulo_banner" value="<?php echo $config['titulo_banner']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Como funciona subtitulo:</span>
				<textarea name="sessao_3_subtitulo"><?php echo $config['sessao_3_subtitulo']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Como funciona último titulo:</span>
				<input type="text" name="sessao_3_ultimo_titulo" value="<?php echo $config['sessao_3_ultimo_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens titulo:</span>
				<input name="sessao_4_titulo" value="<?php echo $config['sessao_4_titulo']?>">
			</div><!--from-group-->
			<!--
			
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 titulo:</span>
				<input type="text" name="sessao_4_info_1_titulo" value="<?php// echo $config['sessao_4_info_1_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 texto :</span>
				<textarea name="sessao_4_info_1_prg"><?php// echo $config['sessao_4_info_1_prg']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 titulo:</span>
				<input type="text" name="sessao_4_info_2_titulo" value="<?php //echo $config['sessao_4_info_2_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 texto :</span>
				<textarea name="sessao_4_info_2_prg"><?php //echo $config['sessao_4_info_2_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 titulo:</span>
				<input type="text" name="sessao_4_info_3_titulo" value="<?php //echo $config['sessao_4_info_3_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 texto :</span>
				<textarea name="sessao_4_info_3_prg"><?php// echo $config['sessao_4_info_3_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 titulo:</span>
				<input type="text" name="sessao_4_info_4_titulo" value="<?php //echo $config['sessao_4_info_4_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 texto :</span>
				<textarea name="sessao_4_info_4_prg"><?php// echo $config['sessao_4_info_4_prg']?></textarea>
			</div><from-group-->

			<div class="group-depoimento">
				<input type="hidden" name="nome_tabela" value="tb_site.config_home">
				<input <?php permissaoInput(1,'acao_editar_home','Editar') ?> />
			
			</div><!--from-group-->
			
		</form>
	</div><!--form-editar-->

</div><!--box-content-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
	<h2>Editar Site Página Portal de Créditos</h2>

	<?php
			/*
			$imagem_autor_novo = $_FILES['imagem_autor_novo'];
			$imagem_autor_atual = $_POST['imagem_autor_atual'];
			$imagem_especial_novo1 = $_FILES['imagem_especial_novo1'];
			$imagem_especial_atual1 = $_POST['imagem_especial_atual1'];
			$titulo_especial1 = $_POST['titulo_especial1'];
			$descricao_especial1 = $_POST['descricao_especial1'];
			$imagem_especial_novo2 = $_FILES['imagem_especial_novo2'];
			$imagem_especial_atual2 = $_POST['imagem_especial_atual2'];
			$titulo_especial2 = $_POST['titulo_especial2'];
			$descricao_especial2 = $_POST['descricao_especial2'];
			$imagem_especial_novo3 = $_FILES['imagem_especial_novo3'];
			$imagem_especial_atual3 = $_POST['imagem_especial_atual3'];
			$titulo_especial3 = $_POST['titulo_especial3'];
			$descricao_especial3 = $_POST['descricao_especial3'];
			$nome_tabela = $_POST['nome_tabela'];

			$titulo = $_POST['titulo'];
			$nome_autor = $_POST['nome_autor'];
			$descricao_autor = $_POST['descricao_autor'];
			$img_autor
			$img_especial1
			$titulo_especial1
			$descricao_especial1
			$img_especial2
			$titulo_especial2
			$descricao_especial2
			$img_especial3
			$titulo_especial3
			$descricao_especial3
			*/
		if(isset($_POST['acao_editar_portal'])){
			if(Painel::updateConfig($_POST)){;
				Painel::alert('sucesso','Site Atualizado com sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'configuracao-geral');
			}else{
				Painel::alert('Campos Vazios não são permitidos!');
			}
		}
	
	?>

	<div class="form-editar cadastro-depoimentos">
		<form method="POST" enctype="multipart/form-data">
			<div class="group-depoimento group-textarea">
				<span>Titulo:</span>
				<input type="text" name="titulo" value="<?php echo $config_portal['titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>SubTitulo:</span>
				<input type="text" name="subtitulo" value="<?php echo $config_portal['subtitulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico Paragrafo 1:</span>
				<textarea name="mosaico_prg_1"><?php echo $config_portal['mosaico_prg_1']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico Paragrafo 2:</span>
				<textarea name="mosaico_prg_2"><?php echo $config_portal['mosaico_prg_2']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico Paragrafo 3:</span>
				<textarea name="mosaico_prg_3"><?php echo $config_portal['mosaico_prg_3']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Ultimo Paragrafo:</span>
				<textarea name="mosaico_ultimo_txt"><?php echo $config_portal['mosaico_ultimo_txt']?></textarea>
			</div><!--from-group-->
			<!--
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens titulo:</span>
				<textarea name="sessao_4_titulo"><?php //echo $config['sessao_4_titulo']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 titulo:</span>
				<input type="text" name="sessao_4_info_1_titulo" value="<?php// echo $config['sessao_4_info_1_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 texto :</span>
				<textarea name="sessao_4_info_1_prg"><?php// echo $config['sessao_4_info_1_prg']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 titulo:</span>
				<input type="text" name="sessao_4_info_2_titulo" value="<?php //echo $config['sessao_4_info_2_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 texto :</span>
				<textarea name="sessao_4_info_2_prg"><?php //echo $config['sessao_4_info_2_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 titulo:</span>
				<input type="text" name="sessao_4_info_3_titulo" value="<?php //echo $config['sessao_4_info_3_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 texto :</span>
				<textarea name="sessao_4_info_3_prg"><?php// echo $config['sessao_4_info_3_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 titulo:</span>
				<input type="text" name="sessao_4_info_4_titulo" value="<?php //echo $config['sessao_4_info_4_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 texto :</span>
				<textarea name="sessao_4_info_4_prg"><?php// echo $config['sessao_4_info_4_prg']?></textarea>
			</div><from-group-->

			<div class="group-depoimento">
				<input type="hidden" name="nome_tabela" value="tb_site.config_portal_de_creditos">
				<input <?php permissaoInput(1,'acao_editar_portal','Editar') ?> />
			
			</div><!--from-group-->
			
		</form>
	</div><!--form-editar-->

</div><!--box-content-->


<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
	<h2>Editar Site Página Como Funciona</h2>

	<?php
			/*
			$imagem_autor_novo = $_FILES['imagem_autor_novo'];
			$imagem_autor_atual = $_POST['imagem_autor_atual'];
			$imagem_especial_novo1 = $_FILES['imagem_especial_novo1'];
			$imagem_especial_atual1 = $_POST['imagem_especial_atual1'];
			$titulo_especial1 = $_POST['titulo_especial1'];
			$descricao_especial1 = $_POST['descricao_especial1'];
			$imagem_especial_novo2 = $_FILES['imagem_especial_novo2'];
			$imagem_especial_atual2 = $_POST['imagem_especial_atual2'];
			$titulo_especial2 = $_POST['titulo_especial2'];
			$descricao_especial2 = $_POST['descricao_especial2'];
			$imagem_especial_novo3 = $_FILES['imagem_especial_novo3'];
			$imagem_especial_atual3 = $_POST['imagem_especial_atual3'];
			$titulo_especial3 = $_POST['titulo_especial3'];
			$descricao_especial3 = $_POST['descricao_especial3'];
			$nome_tabela = $_POST['nome_tabela'];

			$titulo = $_POST['titulo'];
			$nome_autor = $_POST['nome_autor'];
			$descricao_autor = $_POST['descricao_autor'];
			$img_autor
			$img_especial1
			$titulo_especial1
			$descricao_especial1
			$img_especial2
			$titulo_especial2
			$descricao_especial2
			$img_especial3
			$titulo_especial3
			$descricao_especial3
			*/
		if(isset($_POST['acao_editar_como_funciona'])){
			if(Painel::updateConfig($_POST)){;
				Painel::alert('sucesso','Site Atualizado com sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'configuracao-geral');
			}else{
				Painel::alert('Campos Vazios não são permitidos!');
			}
		}
	
	?>

	<div class="form-editar cadastro-depoimentos">
		<form method="POST" enctype="multipart/form-data">
			<div class="group-depoimento group-textarea">
				<span>Titulo:</span>
				<input type="text" name="titulo" value="<?php echo $config_como_funciona['titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Mosaico 1 Titulo:</span>
				<input type="text" name="1_mosaico_titulo" value="<?php echo $config_como_funciona['1_mosaico_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 1 Paragrafo 1:</span>
				<textarea name="1_mosaico_prg_1"><?php echo $config_como_funciona['1_mosaico_prg_1']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 1 Paragrafo 2:</span>
				<textarea name="1_mosaico_prg_2"><?php echo $config_como_funciona['1_mosaico_prg_2']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 1 Paragrafo 3:</span>
				<textarea name="1_mosaico_prg_3"><?php echo $config_como_funciona['1_mosaico_prg_3']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Mosaico 2 Titulo:</span>
				<input type="text" name="2_mosaico_titulo" value="<?php echo $config_como_funciona['2_mosaico_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 2 Paragrafo 1:</span>
				<textarea name="2_mosaico_prg"><?php echo $config_como_funciona['2_mosaico_prg']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Mosaico 3 Titulo:</span>
				<input type="text" name="3_mosaico_titulo" value="<?php echo $config_como_funciona['3_mosaico_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Mosaico 4 Titulo:</span>
				<input type="text" name="4_mosaico_titulo" value="<?php echo $config_como_funciona['4_mosaico_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 4 Paragrafo 1:</span>
				<textarea name="4_mosaico_prg_1"><?php echo $config_como_funciona['4_mosaico_prg_1']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 4 Paragrafo 2:</span>
				<textarea name="4_mosaico_prg_2"><?php echo $config_como_funciona['4_mosaico_prg_2']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Mosaico 5 Titulo:</span>
				<input type="text" name="5_mosaico_titulo" value="<?php echo $config_como_funciona['5_mosaico_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 5 Paragrafo 1:</span>
				<textarea name="5_mosaico_prg_1"><?php echo $config_como_funciona['5_mosaico_prg_1']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 5 Paragrafo 2:</span>
				<textarea name="5_mosaico_prg_2"><?php echo $config_como_funciona['5_mosaico_prg_2']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Mosaico 6 Titulo:</span>
				<input type="text" name="6_mosaico_titulo" value="<?php echo $config_como_funciona['6_mosaico_titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 6 Paragrafo 1:</span>
				<textarea name="6_mosaico_prg_1"><?php echo $config_como_funciona['6_mosaico_prg_1']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 6 Paragrafo 2:</span>
				<textarea name="6_mosaico_prg_2"><?php echo $config_como_funciona['6_mosaico_prg_2']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Mosaico 6 Paragrafo 3:</span>
				<textarea name="6_mosaico_prg_3"><?php echo $config_como_funciona['6_mosaico_prg_3']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Último Título:</span>
				<input type="text" name="ultimo_titulo" value="<?php echo $config_como_funciona['ultimo_titulo']?>">
			</div><!--from-group-->

			<!--
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 4:</span>
				<textarea name="prg_box4"><?php //echo $config_sobrenos['prg_box4']?></textarea>
			</div>
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 5:</span>
				<textarea name="prg_box5"><?php// echo $config_sobrenos['prg_box5']?></textarea>
			</div>
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens titulo:</span>
				<textarea name="sessao_4_titulo"><?php //echo $config['sessao_4_titulo']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 titulo:</span>
				<input type="text" name="sessao_4_info_1_titulo" value="<?php// echo $config['sessao_4_info_1_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 texto :</span>
				<textarea name="sessao_4_info_1_prg"><?php// echo $config['sessao_4_info_1_prg']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 titulo:</span>
				<input type="text" name="sessao_4_info_2_titulo" value="<?php //echo $config['sessao_4_info_2_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 texto :</span>
				<textarea name="sessao_4_info_2_prg"><?php //echo $config['sessao_4_info_2_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 titulo:</span>
				<input type="text" name="sessao_4_info_3_titulo" value="<?php //echo $config['sessao_4_info_3_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 texto :</span>
				<textarea name="sessao_4_info_3_prg"><?php// echo $config['sessao_4_info_3_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 titulo:</span>
				<input type="text" name="sessao_4_info_4_titulo" value="<?php //echo $config['sessao_4_info_4_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 texto :</span>
				<textarea name="sessao_4_info_4_prg"><?php// echo $config['sessao_4_info_4_prg']?></textarea>
			</div><from-group-->

			<div class="group-depoimento">
				<input type="hidden" name="nome_tabela" value="tb_site.config_como_funciona">
				<input <?php permissaoInput(1,'acao_editar_como_funciona','Editar') ?> />
			
			</div><!--from-group-->
			
		</form>
	</div><!--form-editar-->

</div><!--box-content-SOBRENÓS-->

<div class="box-content">
	<img src="<?php echo INCLUDE_PATH_PAINEL;?>img/editar-depoimento-gray.png">
	<h2>Editar Site Página Sobre Nós</h2>

	<?php
			/*
			$imagem_autor_novo = $_FILES['imagem_autor_novo'];
			$imagem_autor_atual = $_POST['imagem_autor_atual'];
			$imagem_especial_novo1 = $_FILES['imagem_especial_novo1'];
			$imagem_especial_atual1 = $_POST['imagem_especial_atual1'];
			$titulo_especial1 = $_POST['titulo_especial1'];
			$descricao_especial1 = $_POST['descricao_especial1'];
			$imagem_especial_novo2 = $_FILES['imagem_especial_novo2'];
			$imagem_especial_atual2 = $_POST['imagem_especial_atual2'];
			$titulo_especial2 = $_POST['titulo_especial2'];
			$descricao_especial2 = $_POST['descricao_especial2'];
			$imagem_especial_novo3 = $_FILES['imagem_especial_novo3'];
			$imagem_especial_atual3 = $_POST['imagem_especial_atual3'];
			$titulo_especial3 = $_POST['titulo_especial3'];
			$descricao_especial3 = $_POST['descricao_especial3'];
			$nome_tabela = $_POST['nome_tabela'];

			$titulo = $_POST['titulo'];
			$nome_autor = $_POST['nome_autor'];
			$descricao_autor = $_POST['descricao_autor'];
			$img_autor
			$img_especial1
			$titulo_especial1
			$descricao_especial1
			$img_especial2
			$titulo_especial2
			$descricao_especial2
			$img_especial3
			$titulo_especial3
			$descricao_especial3
			*/
		if(isset($_POST['acao_editar_sobrenos'])){
			if(Painel::updateConfig($_POST)){;
				Painel::alert('sucesso','Site Atualizado com sucesso!');
				Painel::redirect(INCLUDE_PATH_PAINEL.'configuracao-geral');
			}else{
				Painel::alert('Campos Vazios não são permitidos!');
			}
		}
	
	?>

	<div class="form-editar cadastro-depoimentos">
		<form method="POST" enctype="multipart/form-data">
			<div class="group-depoimento group-textarea">
				<span>Titulo:</span>
				<input type="text" name="titulo" value="<?php echo $config_sobrenos['titulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span>Subtitulo:</span>
				<input type="text" name="subtitulo" value="<?php echo $config_sobrenos['subtitulo']?>">
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 1:</span>
				<textarea name="prg_box1"><?php echo $config_sobrenos['prg_box1']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 2:</span>
				<textarea name="prg_box2"><?php echo $config_sobrenos['prg_box2']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 3:</span>
				<textarea name="prg_box3"><?php echo $config_sobrenos['prg_box3']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 4:</span>
				<textarea name="prg_box4"><?php echo $config_sobrenos['prg_box4']?></textarea>
			</div><!--from-group-->
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Paragrafo Parte 5:</span>
				<textarea name="prg_box5"><?php echo $config_sobrenos['prg_box5']?></textarea>
			</div><!--from-group-->

	
			<!--
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens titulo:</span>
				<textarea name="sessao_4_titulo"><?php //echo $config['sessao_4_titulo']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 titulo:</span>
				<input type="text" name="sessao_4_info_1_titulo" value="<?php// echo $config['sessao_4_info_1_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 1 texto :</span>
				<textarea name="sessao_4_info_1_prg"><?php// echo $config['sessao_4_info_1_prg']?></textarea>
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 titulo:</span>
				<input type="text" name="sessao_4_info_2_titulo" value="<?php //echo $config['sessao_4_info_2_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 2 texto :</span>
				<textarea name="sessao_4_info_2_prg"><?php //echo $config['sessao_4_info_2_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 titulo:</span>
				<input type="text" name="sessao_4_info_3_titulo" value="<?php //echo $config['sessao_4_info_3_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 3 texto :</span>
				<textarea name="sessao_4_info_3_prg"><?php// echo $config['sessao_4_info_3_prg']?></textarea>
			</div>from-group

			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 titulo:</span>
				<input type="text" name="sessao_4_info_4_titulo" value="<?php //echo $config['sessao_4_info_4_titulo']?>">
			</div>from-group
			<div class="group-depoimento group-textarea">
				<span style="vertical-align:top;">Vantagens info 4 texto :</span>
				<textarea name="sessao_4_info_4_prg"><?php// echo $config['sessao_4_info_4_prg']?></textarea>
			</div><from-group-->

			<div class="group-depoimento">
				<input type="hidden" name="nome_tabela" value="tb_site.config_sobrenos">
				<input <?php permissaoInput(1,'acao_editar_sobrenos','Editar') ?> />
			
			</div><!--from-group-->
			
		</form>
	</div><!--form-editar-->

</div><!--box-content-SOBRENÓS-->

