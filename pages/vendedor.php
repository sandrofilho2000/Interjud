<?php
	$infoSiteVendedor = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_vendedor`");
	$infoSiteVendedor->execute();
	$infoSiteVendedor = $infoSiteVendedor->fetch();

?>
<section class="como-funciona-pagina">
	<div class="container">

		<div class="bg-comece-ja"></div>

		<div class="line-title">
			<h2>COMO FUNCIONA</h2>
			<div class="line-line">
				<div class="line"></div>
			</div>
		</div><!--line-title-->
		<div class="escolha-funciona">
			<div class="escolha-vendedor">
				<a <?php selecionadoMenu('vendedor') ?> href="<?php echo INCLUDE_PATH?>vendedor">VENDEDOR</a>
			</div><!--escolha-vendedor-->
			<div class="escolha-comprador">
				<a <?php selecionadoMenu('investidor') ?> href="<?php echo INCLUDE_PATH?>investidor">INVESTIDOR</a>
			</div><!--escolha-comprador-->
			
		</div><!--escolha-funciona-->
		<div class="container-principal">


<section class="vendedor-page">
	<div class="container">

		<div class="vendedor-single">
			<h2><?php echo $infoSiteVendedor['titulo_box1']?></h2>
			<div class="vendedor-saiba-cadastro">
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteVendedor['titulo_box1_parte1']?></p>
					<ul>
					<ul>
						<li>Nº do processo</li>
						<li>Nome do Réu/devedor</li>
						<li>Classe judicial</li>
						<li>Valor estimado do crédito</li>
						<li>Percentual de honorários contratuais</li>
						<li>Você escolhe se vai vender tudo, ou apenas o crédito</li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteVendedor['titulo_box1_parte2']?></p>
					<ul>
						<li>Nome Completo</li>
						<li>E-mail</li>
						<li>CPF</li>
						<li>Telefone</li>
						<li>Endereço</li>
						<li>OAB(opcional)</li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteVendedor['titulo_box1_parte3']?></p>
					<ul>
						<li><?php echo $infoSiteVendedor['texto_box1_parte3']?></li>
					</ul>
				</div><!--vendedor-wraper-->
			</div><!--vendedor-saiba-cadastro-->
		</div><!--vendedor-single-->

		<div class="vendedor-single proximo">
			<h2><?php echo $infoSiteVendedor['titulo_box2']?></h2>

			<div class="veja-credito">

				<p class="veja-p"><?php echo $infoSiteVendedor['subtitulo_box2']?></p>

				<div class="credito-single">

					<div class="overlay-creditos absolute"></div>

					<div class="credito-frente absolute" style="background-image:url(img/about-plus.jpeg);">
						<div class="img-credito-frente"></div>
						<div class="texto credito-frente">
							<p class="nome-credito">INTER JUD</p>
						</div>
						<div class="estrelas">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div><!--estrelas-->
					</div><!--credito-frente-->

					<div class="credito-tras absolute" style="background-image:url(img/about-bg.jpg);">
						<div class="img-credito-tras"></div>
						<div class="texto credito-tras">
							<p>Valor</p>
							<p class="valor">500.000,00</p>
							<p>Classe</p>
							<p class="classe">Cível</p>
							<div class="favorito">
								<span></span>
							</div>
							<a href="#">SAIBA MAIS</a>
						</div>
					</div><!--credito-tras-->

				</div><!--credito-single-->

			</div><!--veja-credito-->

			<p><?php echo $infoSiteVendedor['texto_box2']?></p>
			
		</div><!--vendedor-single-->

		<div class="vendedor-single proximo">
			<h2><?php echo $infoSiteVendedor['titulo_box3']?></h2>

			<div class="vendedor-saiba-cadastro venda-credito">
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteVendedor['titulo_box3_parte1']?></p>
					<ul>
						<li><?php echo $infoSiteVendedor['prg_box3_parte1_ln1']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte1_ln2']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte1_ln3']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte1_ln4']?></li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteVendedor['titulo_box3_parte2']?></p>
					<ul>
						<li><?php echo $infoSiteVendedor['prg_box3_parte2_ln1']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte2_ln2']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte2_ln3']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte2_ln4']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte2_ln5']?></li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteVendedor['titulo_box3_parte3']?></p>
					<ul>
						<li><?php echo $infoSiteVendedor['prg_box3_parte3_ln1']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte3_ln2']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte3_ln3']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte3_ln4']?></li>
						<li><?php echo $infoSiteVendedor['prg_box3_parte3_ln5']?></li>
					</ul>
				</div><!--vendedor-wraper-->
			</div><!--vendedor-saiba-cadastro-->
			
		</div><!--vendedor-single-->

		<div class="vendedor-single proximo">
			<h2><?php echo $infoSiteVendedor['titulo_box4']?></h2>
			<div class="vendedor-wraper-ol">
				<ol>
					<li><?php echo $infoSiteVendedor['prg_box4_ln1']?></li>
					<li><?php echo $infoSiteVendedor['prg_box4_ln2']?></li>
					<li><?php echo $infoSiteVendedor['prg_box4_ln3']?></li>
					<li><?php echo $infoSiteVendedor['prg_box4_ln4']?></li>
				</ol>
			</div><!--vendedor-wraper-ol-->
		</div><!--vendedor-single-->

		<div class="vendedor-single proximo">
			<h2><?php echo $infoSiteVendedor['titulo_box5']?></h2>
			<p class="veja-p"><?php echo $infoSiteVendedor['prg_box5']?></p>
		</div><!--vendedor-single-->

		<div class="vendedor-single proximo">
			<h2><?php echo $infoSiteVendedor['titulo_box6']?></h2>
			<p class="veja-p"><?php echo $infoSiteVendedor['prg_box6']?></p>
		</div><!--vendedor-single-->

		<div class="mosaico-title">
			<h2><?php echo $infoSiteVendedor['ultimo_titulo']?></h2>
			<p class="veja-p"><?php echo $infoSiteVendedor['ulitmo_paragrafo']?></p>
			<input type="radio" name="aceito_termos_condicoes"> <span class="veja-p">Eu aceito os Termos do Vendedor<span>
		</div><!--line-title-->


		<div class="btn-cadastre mosaico-cadastre">
			<a href="">CADASTRE SEU CRÉDITO</a>
		</div>


	</div><!--container-->
</section>

		</div><!--container-principal-->
	</div><!--container-->
</section><!--como-funciona-->
