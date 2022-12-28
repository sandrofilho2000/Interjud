<section class="portal-de-credito">
	<div class="bg-fundo-portal">

		<div class="line-title line-one">
			<h2>Portal de crédito</h2>
			<div class="line-line">
				<div class="line"></div>
			</div>
		</div><!--line-title-->

		<div class="container-creditos">

		<?php

			$sql = Mysql::conectar()->prepare("SELECT * FROM `creditos` ORDER BY idcreditos ASC LIMIT 3");

			$sql->execute();

			$credito = $sql->fetchAll();

			foreach($credito as $key => $value){
				
				if($value['rating'] == ''){
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


		</div><!--container-creditos-->

		<div class="wraper-btn-portal">
			<div class="btn-cadastre btn-login">
				<a href="<?php echo INCLUDE_PATH?>login">FAZER LOGIN NO PORTAL</a>
			</div>
		</div><!--wraper-btn-portal-->

		<div class="line-title title-descubra">
			<h2><?php echo $infoSitePortal['titulo']?></h2>
			<div class="line-line">
				<div class="line"></div>
			</div>
		</div><!--line-title-->
		<p class="subtitulo"><?php echo $infoSitePortal['subtitulo']?></p>

		<div class="container">
			<div class="mosaico">

				<div class="mosaico-single">
					<div class="img-mosaico">
						<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['portal_creditos_img1']?>">
					</div><!--img-mosaico-->
					<div class="txt-mosaico">
						<p><?php echo $infoSitePortal['mosaico_prg_1']?></p>
					</div><!--txt-mosaico-->
				</div><!--mosaico-single-->

				<div class="mosaico-single" style="flex-direction: row-reverse;">
					<div class="img-mosaico">
						<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['portal_creditos_img2']?>">
					</div><!--img-mosaico-->
					<div class="txt-mosaico">
						<p><?php echo $infoSitePortal['mosaico_prg_2']?></p>
					</div><!--txt-mosaico-->
				</div><!--mosaico-single-->

				<div class="mosaico-single">
					<div class="img-mosaico">
						<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['portal_creditos_img3']?>">
					</div><!--img-mosaico-->
					<div class="txt-mosaico">
						<p><?php echo $infoSitePortal['mosaico_prg_3']?></p>
					</div><!--txt-mosaico-->
				</div><!--mosaico-single-->

			</div><!--mosaico-->

			<div class="chamada-portal">
				<p><?php echo $infoSitePortal['mosaico_ultimo_txt']?></p>
			</div><!--chamada-portal-->

			<div class="btn-chamada-portal">
				<div class="btn-cadastre">
					<a href="<?php echo INCLUDE_PATH?>cadastrar-se-vendedor">VENDA SEU CRÉDITO</a>
				</div>
				<div class="btn-invista">
					<a href="<?php echo INCLUDE_PATH?>cadastrar-se-investidor">COMPRE UM CRÉDITO</a>
				</div><!--btn-invista-->
			</div><!--btn-chamada-portal-->

		</div><!--container-->

	</div><!--bg-fundo-portal-->
</section><!--portal-de-credito-->