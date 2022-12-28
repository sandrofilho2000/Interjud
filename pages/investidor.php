<?php
	$infoSiteInvestidor = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_investidor`");
	$infoSiteInvestidor->execute();
	$infoSiteInvestidor = $infoSiteInvestidor->fetch();

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
			<h2><?php echo $infoSiteInvestidor['titulo_box1']?></h2>
			<div class="vendedor-saiba-cadastro">
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteInvestidor['titulo_box1_parte1']?></p>
					<ul>
						<li>Nome Completo</li>
						<li>E-mail</li>
						<li>CPF</li>
						<li>Telefone</li>
						<li>Endereço</li>
						<li>Você seleciona as áreas e os valores de interesse para receber os novos cadastros diretamente em seu email</li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteInvestidor['titulo_box1_parte2']?></p>
					<ul>
						<li><?php echo $infoSiteInvestidor['ln1_box1_parte2']?></li>
						<li><?php echo $infoSiteInvestidor['ln2_box1_parte2']?></li>
						<li><?php echo $infoSiteInvestidor['ln3_box1_parte2']?></li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteInvestidor['titulo_box1_parte3']?></p>
					<ul>
						<li><?php echo $infoSiteInvestidor['ln1_box1_parte3']?></li>
					</ul>
				</div><!--vendedor-wraper-->
			</div><!--vendedor-saiba-cadastro-->
		</div><!--vendedor-single-->

		<div class="vendedor-single proximo pagina-investidor">
			<h2><?php echo $infoSiteInvestidor['titulo_box2']?></h2>

			<div class="vendedor-saiba-cadastro venda-credito">

				<div class="vendedor-wraper">
					<p><?php echo $infoSiteInvestidor['titulo_box2_parte1']?></p>
					<ul>
						<li><?php echo $infoSiteInvestidor['ln1_box2_parte1']?></li>
						<li><?php echo $infoSiteInvestidor['ln2_box2_parte1']?>.</li>
						<li><?php echo $infoSiteInvestidor['ln3_box2_parte1']?></li>
						<li><?php echo $infoSiteInvestidor['ln4_box2_parte1']?></li>
						<li><?php echo $infoSiteInvestidor['ln5_box2_parte1']?></li>
					</ul>
				</div><!--vendedor-wraper-->
				<div class="vendedor-wraper">
					<p><?php echo $infoSiteInvestidor['titulo_box2_parte2']?></p>
					<ul>
						<li><?php echo $infoSiteInvestidor['ln1_box2_parte2']?></li>
						<li><?php echo $infoSiteInvestidor['ln2_box2_parte2']?></li>
						<li><?php echo $infoSiteInvestidor['ln3_box2_parte2']?></li>
						<li><?php echo $infoSiteInvestidor['ln4_box2_parte2']?></li>
						<li><?php echo $infoSiteInvestidor['ln5_box2_parte2']?></li>
					</ul>
				</div><!--vendedor-wraper-->
			</div><!--vendedor-saiba-cadastro-->
			
		</div><!--vendedor-single-->

		<div class="mosaico-title">
			<h2><?php echo $infoSiteInvestidor['ultimo_titulo']?></h2>
			<p class="veja-p"><?php echo $infoSiteInvestidor['ulitmo_paragrafo']?>.</p>
		</div><!--line-title-->


		<div class="btn-invista mosaico-cadastre">
			<a href="">SEJA INVESTIDOR</a>
		</div><!--btn-invista-->


	</div><!--container-->
</section>

		</div><!--container-principal-->
	</div><!--container-->
</section><!--como-funciona-->
