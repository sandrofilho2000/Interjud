<style>
	.whatsapp-link {
		position: fixed;
		width: 60px;
		height: 60px;
		bottom: 40px;
		right: 40px;
		background-color: #25d366;
		color: #fff;
		border-radius: 50px;
		text-align: center;
		font-size: 30px;
		box-shadow: 1px 1px 2px #888;
		z-index: 1000;
	}

	.fa-whatsapp {
		margin-top: 16px;
	}
</style>
<link href='https://unpkg.com/boxicons@2.1.0/css/boxicons.min.css' rel='stylesheet'>

<section class="home-bg" style="background-image: url(painel/uploads/<?php echo $infoSiteImg['home_bg'] ?>)" ;>
	<div class="overlay" style="background-color: rgba(0, 0, 0, <?php echo $infoSiteHome['overlay_banner'] ?>)"></div>
	<div class="container">


		<div class="home-center">
			<div class="home-text">
				<h1><?php echo $infoSiteHome['titulo_banner'] ?></h1>
			</div>
			<div class="home-btn">
				<div class="btn-cadastre btn-home">
					<a href="<?php echo INCLUDE_PATH ?>cadastrar-se-vendedor">VENDA SEU CRÉDITO</a>
				</div>
				<div class="btn-invista btn-home">
					<a href="<?php echo INCLUDE_PATH ?>cadastrar-se-investidor">COMPRE UM CRÉDITO</a>
				</div>
			</div>
		</div>

	</div>
	<!--container-->
</section>
<!--home-bg-->

<section class="portal-home">
	<div class="portal-container container">
		<div class="line-title">
			<h2>PORTAL <br> DE CRÉDITO</h2>
		</div>
		<!--line-title-->

		<div class="credito-wraper ">

			<div class="container-creditos owl-carousel owl-theme">

				<?php

				$sql = Mysql::conectar()->prepare("SELECT * FROM `creditos` ORDER BY idcreditos ASC limit 15");

				$sql->execute();

				$credito = $sql->fetchAll();

				foreach ($credito as $key => $value) {

					if ($value['rating'] == '') {
						continue;
					}

					echo "

				<div class='credito-single'>

					<div class='credito-frente absolute' style='background-image:url(painel_creditos/assets/imagens/$value[background]);'>
						<div class='estrelas'>
							<div class='rating-stars' style='background-image:url(img/portal-de-credito/rating_$value[rating].jpg)'>
							</div><!--rating-stars-->
						</div>
						<div class='overlay-creditos absolute'></div>
						<div class='texto credito-frente'>
							<p class='nome-credito'>$value[nome]</p>
						</div>
						<p>Valor</p>
						<p class='valor'>$value[valor_negociar]</p>
						<p>Classe</p>
						<p class='classe'>$value[classe]</p>
						
					</div>

					<div class='credito-tras absolute' style='background-image:url(img/portal-de-credito/default.jpg);'>
						<div class='img-credito-tras'></div>
						<div class='texto credito-tras'>
							
							<a href='https://www.interjud.com.br/login'>Fazer Proposta</a>
						</div>
					</div>

				</div>
				
				";
				}


				?>


			</div>
			<!--container-creditos-->

		</div>
		<!--credito-wraper-->

		<div class="btn-cadastre btn-portal btn-login">
			<a href="<?php echo INCLUDE_PATH ?>login">IR PARA O PORTAL</a>
		</div>



	</div>
	<!--container-->
</section>
<!--portal-home-->

<a class="whatsapp-link"  href="https://web.whatsapp.com/send?phone=5519992520493" target="_blank">
	<i class="fa fa-whatsapp"></i>
</a>

<div class="overlay_all">
	<div class="overlay_box">
		<iframe width="100%" height="100%" src="https://www.youtube.com/embed/op_JGEk1oro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
</div>




<section class="como-funciona">
	<div class="container">

		<div class="line-title title_funciona">
			<h2>COMO <br> FUNCIONA</h2>
		</div>
		<!--line-title-->



		<div class="wraper-funciona">

			<div class="video-wraper box">
				<video src="<?php echo INCLUDE_PATH; ?>img/VIDEO_INSTITUCIONAL.mp4" type="video/mp4" muted loop>
				</video>
				<div class="overlay_video">
					<h1>CLIQUE PARA HABILITAR O SOM</h1>
				</div>
			</div>
			<!--video-wraper-->

			<div class="faq-video">

				<div class="faq-single">
					<label class="pergunta-duvida" for="duv-um">
						<input type="radio" name="duvida" id="duv-um">
						<div class="sinal-duv sinal-um">+</div>
						<h2 class="txt-um">1º CADASTRO</h2>
					</label>
					<div class="line-faq"></div>
					<div class="faq-resposta faq-um">
						<p>Preencha seus dados pessoais e os dados do processo a ser negociado, com as informações mais fiéis possíveis. Se necessário, contate seu advogado. Você pode optar por aderir GRATUITAMENTE ao serviço de avaliação de risco
						</p>
					</div>
					<!--faq-resposta-->
				</div>
				<!--faq-single-->

				<div class="faq-single">
					<label class="pergunta-duvida" for="duv-dois">
						<input type="radio" name="duvida" id="duv-dois">
						<div class="sinal-duv sinal-dois">+</div>
						<h2 class="txt-dois">2º CRÉDITO DISPONIVEL NO MARKETPLACE</h2>
					</label>
					<div class="line-faq"></div>
					<div class="faq-resposta faq-dois">
						<p>Pronto! Seu crédito já está disponível no PRIMEIRO marketplace de crédito judiciais do Brasil. Agora é só aguardar o contato com a melhor proposta.</p>
					</div>
					<!--faq-resposta-->
				</div>
				<!--faq-single-->

				<div class="faq-single">
					<label class="pergunta-duvida" for="duv-tres">
						<input type="radio" name="duvida" id="duv-tres">
						<div class="sinal-duv sinal-tres">+</div>
						<h2 class="txt-tres">3º NEGOCIAÇÃO</h2>
					</label>
					<div class="line-faq"></div>
					<div class="faq-resposta faq-tres">
						<p>Interessados entrarão em contato por meio da plataforma. Disponibilizamos um chat interno para vocês negociarem de forma livre e direta o valor e as condições do negócio, desde que dentro dos parâmetros legais e dos termos e condições da INTERJUD.</p>
					</div>
					<!--faq-resposta-->
				</div>
				<!--faq-single-->

				<div class="faq-single">
					<label class="pergunta-duvida" for="duv-quatro">
						<input type="radio" name="duvida" id="duv-quatro">
						<div class="sinal-duv sinal-quatro">+</div>
						<h2 class="txt-quatro">4º CESSÃO DE DIREITOS</h2>
					</label>
					<div class="line-faq"></div>
					<div class="faq-resposta faq-quatro">
						<p>Após aceitar a proposta, a equipe da INTERJUD elaborará um contrato de cessão de direitos inteiramente digital, no qual as parte e o advogado do vendedor devem assinar de forma eletrônica, inclusive pelo próprio celular.</p>
					</div>
					<!--faq-resposta-->
				</div>
				<!--faq-single-->

				<div class="faq-single">
					<label class="pergunta-duvida" for="duv-cinco">
						<input type="radio" name="duvida" id="duv-cinco">
						<div class="sinal-duv sinal-cinco">+</div>
						<h2 class="txt-cinco">5º HOMOLOGAÇÃO E PAGAMENTO</h2>
					</label>
					<div class="line-faq"></div>
					<div class="faq-resposta faq-cinco">
						<p>Após a homologação, o dinheiro é liberado ao vendedor. Porém, caso a transação não ocorra por algum motivo, o negócio é desfeito sem qualquer ônus para as partes.</p>
					</div>
					<!--faq-resposta-->
				</div>
				<!--faq-single-->

			</div>
			<!--faq-video-->

		</div>
		<!--wraper-funciona-->



		<div class="mosaico-title">
			<h2><?php echo $infoSiteHome['sessao_3_ultimo_titulo'] ?></h2>
		</div>
		<!--line-title-->


		<div class="btn-cadastre mosaico-cadastre">
			<a href="<?php echo INCLUDE_PATH ?>cadastrar-se-vendedor">CADASTRE SEU CRÉDITO</a>
		</div>

	</div>
	<!--container-->
</section>
<!--como-funciona-->


<section class="vantagens">
	<?php
	$info = Mysql::conectar()->prepare("SELECT * FROM `tb_site.vantagens`");
	$info->execute();
	?>
	<div class="line-title">
		<h2>VANTAGENS DE <br> UTILIZAR A INTERJUD</h2>
	</div>
	<!--line-title-->

	<div class="container">

		<?php
		$info = Mysql::conectar()->prepare("SELECT * FROM `tb_site.vantagens`  ORDER BY order_id ASC");
		$info->execute();
		foreach ($info as $key => $value) {
		?>

			<div style="background-image: url(pexels<?php echo $key + 1 ?>.jpg);" class="single-vantagens">
				<div class="vantagem_number">0<?php echo $key + 1 ?></div>
				<div class="vantagens-img">
					<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['icone_vantagens'] ?>">
				</div>
				<div class="vantagens-txt">
					<h2><?php echo $value['titulo_vantagens'] ?></h2>
					<p><?php echo $value['prg_vantagens'] ?></p>
				</div>
				<div class="clear"></div>
			</div>
		<?php } ?>

		<div class="clear"></div>
		<!--clear-->

	</div>
	<!--container-->
</section>
<!--vantagens-->

<section class="depoimentos">
	<div class="container">
		<div class="line-title">
			<h2>DEPOIMENTOS</h2>
		</div>
		<!--line-title-->
		<div class="container-depoimentos">
			<div class=" depoimentos-wraper">

				<?php
				$sql = Mysql::conectar()->prepare("SELECT * FROM `tb_site.depoimentos` ORDER BY order_id ASC LIMIT 3");
				$sql->execute();
				$depoimentos = $sql->fetchAll();
				foreach ($depoimentos as $key => $value) {
				?>

					<div style="background-image: url(pexels.png);" class="single-depoimento">
						<div class="depoimento-txt">
							<img src="quote.jpg" alt="">
							<p>
							<p>"<?php echo substr($value['depoimento'], 0, 98) ?>."</p>
							</p>
						</div>
						<div class="depoimento-nome">
							<img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['foto'] ?>">
							<p><?php echo $value['nome'] ?></p>
						</div>

					</div>

				<?php } ?>




			</div>
			<!--depoimentos-wraper-->
		</div>
		<!--container-depoimentos-->

	</div>
	<!--container-->
</section>
<!--depoimentos-->

<section class="duvidas-frequentes">
	<div class="container">
		<div class="line-title">
			<h2>DÚVIDAS FREQUENTES</h2>
		</div>
		<!--line-title-->

		<div class="faq-wraper" style="height: auto;">

			<div class="faq-duvidas">
				<?php
				$duvidas = Painel::selectAll('tb_site.duvfrequentes');
				foreach ($duvidas as $key => $value) {
				?>
					<div class="duvida-single">
						<label class="pergunta-duvida faq-duvida">
							<div class="sinal-duv sinal-one">></div>
							<h2 class="txt-one"><?php echo $value['duvida'] ?></h2>
						</label>
						<div class="resposta-duvida-faq faq-one">
							<p style="font-weight: lighter; line-height: 20px;"><?php echo $value['resposta'] ?></p>
						</div>
						<!--resposta-duvida-faq-->
					</div>
					<!--duvida-single-->

				<?php } ?>

			</div>
			<!--faq-duvidas-->

		</div>
		<!--faq-wraper-->

	</div>
	<!--container-->
</section>
<!--duvidas-frequentes-->

<section class="contato" id="contato">
	<div class="container">

		<div class="parte-contato-social">
			<div class="line-title">
				<h2>ESTAMOS EM</h2>
				<div class="line-line">
					<div class="line"></div>
				</div>
			</div>
			<!--line-title-->
			<div class="contato-sociais">

				<div class="social-wraper">
					<a href=""><img src="<?php echo INCLUDE_PATH ?>img/home/icon-insta.png"></a>
				</div>
				<!--social-wraper-->

				<div class="social-wraper">
					<a href=""><img src="<?php echo INCLUDE_PATH ?>img/home/icon-whats.png"></a>
				</div>
				<!--social-wraper-->

				<div class="social-wraper">
					<a href=""><img src="<?php echo INCLUDE_PATH ?>img/home/icon-mail.png"></a>
				</div>
				<!--social-wraper-->

			</div>
			<!--contato-sociais-->
		</div>
		<!--parte-contato-social-->

		<div class="parte-contato-form">
			<div class="line-title">
				<h2>CONTATO</h2>
				<div class="line-line">
					<div class="line"></div>
				</div>
			</div>
			<!--line-title-->

			<!--
    //overlay-loading
	sucess-box
	overlay-error
	-->
			<div class="overlay-loading">
				<p>Enviando Mensagem!</p>
			</div>
			<div class="sucess-box">
				<p>Mensagem Enviada!</p>
			</div>
			<div class="overlay-error">
				<p>Ocorreu algum erro!</p>
			</div>
			<div class="form-wraper">
				<form method="POST" class="form-contato">
					<div class="form-input input-click">
						<p>Nome Completo</p>
						<input type="text" name="nome">
					</div>
					<!--form-input-->
					<div class="form-input input-click">
						<p>E-mail</p>
						<input type="text" name="email">
					</div>
					<!--form-input-->
					<div class="form-input input-click">
						<select name="assunto">
							<option value="" disabled selected>Assunto</option>
							<option value="duvidas">Dúvidas</option>
							<option value="elogios">Elogios</option>
							<option value="reclamacoes">Reclamações</option>
						</select>
					</div>
					<!--form-input-->
					<div class="form-input input-click">
						<p>Sua Mensagem</p>
						<textarea name="mensagem"></textarea>
					</div>
					<!--form-input-->
					<div class="form-input">
						<input type="submit" name="acao" value="ENVIAR">
					</div>
					<!--form-input-->
				</form>
			</div>
			<!--form-wraper-->
		</div>
		<!--parte-contato-form-->

	</div>
	<!--container-->
</section>
<!--contato-->