<?php
	$infoSiteSobre = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_sobrenos`");
	$infoSiteSobre->execute();
	$infoSiteSobre = $infoSiteSobre->fetch();
?>
<section class="sobre-nos">
	<div class="header-sobre-nos">
		<div class="container">
			<div class="line-title">
				<h2><?php echo $infoSiteSobre['titulo']?></h2>
				<div class="line-line">
					<div class="line"></div>
				</div>
			</div><!--line-title-->
		<p><?php echo $infoSiteSobre['subtitulo']?></p>
		</div><!--container-->
	</div><!--header-sobre-nos-->
</section>

<section class="mosaico-sobre-wraper">

	<div class="mosaico-sobre-single">
		<div class="mosaico-center" style="flex-direction:row-reverse">
			<div class="img-mosaico">
				<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['sobrenos_img1']?>">
			</div>
			<div class="txt-mosaico">
				<p><?php echo $infoSiteSobre['prg_box1']?></p>
			</div><!--txt-mosaico-->
		</div><!--mosaico-center-->
	</div><!--mosaico-sobre-single-->

	<div class="mosaico-sobre-single">
		<div class="mosaico-center">
			<div class="img-mosaico">
				<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['sobrenos_img2']?>">
			</div>
			<div class="txt-mosaico">
				<p><?php echo $infoSiteSobre['prg_box2']?></p>
			</div><!--txt-mosaico-->
		</div><!--mosaico-center-->
	</div><!--mosaico-sobre-single-->

	<div class="mosaico-sobre-single">
		<div class="mosaico-center" style="flex-direction:row-reverse">
			<div class="img-mosaico">
				<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['sobrenos_img3']?>">
			</div>
			<div class="txt-mosaico">
				<p><?php echo $infoSiteSobre['prg_box3']?></p>
			</div><!--txt-mosaico-->
		</div><!--mosaico-center-->
	</div><!--mosaico-sobre-single-->

	<div class="mosaico-sobre-single">
		<div class="mosaico-center">
			<div class="img-mosaico">
				<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['sobrenos_img4']?>">
			</div>
			<div class="txt-mosaico">
				<p><?php echo $infoSiteSobre['prg_box4']?></p>
			</div><!--txt-mosaico-->
		</div><!--mosaico-center-->
	</div><!--mosaico-sobre-single-->

</section><!--mosaico-sobre-wraper-->

<section class="final-sobre-nos">
	<div class="mosaico-sobre-single">
		<div class="mosaico-center" style="flex-direction:row-reverse">
			<div class="img-mosaico">
				<img src="<?php echo INCLUDE_PATH_PAINEL;?>uploads/<?php echo $infoSiteImg['sobrenos_img5']?>">
			</div>
			<div class="txt-mosaico">
				<p><?php echo $infoSiteSobre['prg_box5']?></p>
			</div><!--txt-mosaico-->
		</div><!--mosaico-center-->
		<div class="container">
			<div class="btn-cadastre">
				<a href="<?php echo INCLUDE_PATH?>comece-ja">CADASTRE SEU CRÉDITO</a>
			</div>
			<div class="btn-invista">
				<a href="<?php echo INCLUDE_PATH?>comece-ja">SEJA INVESTIDOR</a>
			</div><!--btn-invista-->
		</div><!--container-->
	</div><!--mosaico-sobre-single-->
</section><!--final-sobre-nos-->