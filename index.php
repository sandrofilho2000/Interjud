<?php include('config.php') ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>
<?php
$infoSiteHome = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_home`");
$infoSiteHome->execute();
$infoSiteHome = $infoSiteHome->fetch();

$infoSiteVantagens = Mysql::conectar()->prepare("SELECT * FROM `tb_site.vantagens`");
$infoSiteVantagens->execute();
$infoSiteVantagens = $infoSiteVantagens->fetch();

$infoSitePortal = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_portal_de_creditos`");
$infoSitePortal->execute();
$infoSitePortal = $infoSitePortal->fetch();

$infoSiteImg = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_imagens`");
$infoSiteImg->execute();
$infoSiteImg = $infoSiteImg->fetch();

$infoSiteComoFunciona = Mysql::conectar()->prepare("SELECT * FROM `tb_site.config_como_funciona`");
$infoSiteComoFunciona->execute();
$infoSiteComoFunciona = $infoSiteComoFunciona->fetch();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>
		<?php echo $infoSiteHome['titulo'] ?>
	</title>
	<link rel="shortcut icon" type="image-x/png" href="<?php echo INCLUDE_PATH ?>icon.png">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
		integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH ?>css/slick.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH ?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<meta name="description"
		content="Compre ou venda créditos judiciais com a segurança da InterJud, Garanta agora seu direito e antecipe seus sonhos, ou Receba um valor justo pelo seu crédito judicial.">
	<meta name="author" content="Design por DamixCode/Desenvolvimento por Aurora Web Design">
	<meta name="keywords"
		content="venda,creditos,judiciais,compra,creditos,judiciais,negocie,seu,credito,invista,em,creditos,judiciais">
	<meta name="og:description" content="Compre ou venda créditos judiciais com a segurança da InterJud">
	<meta name="og:url" content="https://www.interjud.com.br/">
	<meta name="og:image" content="<?php echo INCLUDE_PATH ?>img/logo.png">

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

	<!-- Facebook Pixel Code -->
	<script>
		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
				n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
			n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '219822620183160');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=219822620183160&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body>

	<?php

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	switch ($url) {
		case 'contato':
			echo '<target target="contato" />';
			break;
	}
	?>

	<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5519992520493" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>

	<header>

		<div class="menu-mobile">
			<div class="icone-menu"></div>
			<ul>
				<li class="menu-submenu">
					<a>CRÉDITOS</a>
					<div class="submenu">
						<a <?php
						$url = isset($_GET['url']) ? $_GET['url'] : 'home';
						if ($url == 'cadastrar-se-vendedor') {
							echo 'class="menu-active"';
						}
						?> href="<?php echo INCLUDE_PATH ?>cadastrar-se-vendedor"><b>-
								VENDA SEU CRÉDITO</b></a>
						<a <?php
						$url = isset($_GET['url']) ? $_GET['url'] : 'home';
						if ($url == 'cadastrar-se-investidor') {
							echo 'class="menu-active"';
						}
						?>
							href="<?php echo INCLUDE_PATH ?>cadastrar-se-investidor"><b>- COMPRE UM CRÉDITO</b></a>
						<a <?php
						$url = isset($_GET['url']) ? $_GET['url'] : 'home';
						if ($url == 'portal-de-credito') {
							echo 'class="menu-active"';
						}
						?> href="<?php echo INCLUDE_PATH ?>portal-de-credito">- PORTAL DE
							CRÉDITOS</a>
						<a <?php
						$url = isset($_GET['url']) ? $_GET['url'] : 'home';
						if ($url == 'como-funciona') {
							echo 'class="menu-active"';
						}
						?> href="<?php echo INCLUDE_PATH; ?>como-funciona">- COMO
							FUNCIONA</a>
					</div><!--submenu-->
				</li>
				<li><a <?php
				$url = isset($_GET['url']) ? $_GET['url'] : 'home';
				if ($url == 'sobre-nos') {
					echo 'class="menu-active"';
				}
				?> href="<?php echo INCLUDE_PATH ?>sobre-nos">SOBRE NÓS</a></li>
				<li><a <?php
				$url = isset($_GET['url']) ? $_GET['url'] : 'home';
				if ($url == 'contato') {
					echo 'class="menu-active"';
				}
				?> href="<?php echo INCLUDE_PATH ?>contato">CONTATO</a></li>
				<li><a <?php
				$url = isset($_GET['url']) ? $_GET['url'] : 'home';
				if ($url == 'login') {
					echo 'class="menu-active"';
				}
				?> href="<?php echo INCLUDE_PATH ?>login">LOGIN</a></li>
			</ul>
		</div><!--menu-mobile-->

		<div class="container">
			<div class="logo">
				<a href="<?php echo INCLUDE_PATH ?>index.php"><img src="<?php echo INCLUDE_PATH ?>img/logo.png"></a>
			</div>
			<div class="menu-desktop">
				<ul>
					<li class="menu-submenu-desktop">
						<a>CRÉDITOS</a>
						<div class="submenu-desktop">
							<a <?php
							$url = isset($_GET['url']) ? $_GET['url'] : 'home';
							if ($url == 'cadastrar-se-vendedor') {
								echo 'class="menu-active"';
							}
							?>
								href="<?php echo INCLUDE_PATH ?>cadastrar-se-vendedor"><b>- VENDA SEU CRÉDITO</b></a>
							<a <?php
							$url = isset($_GET['url']) ? $_GET['url'] : 'home';
							if ($url == 'cadastrar-se-investidor') {
								echo 'class="menu-active"';
							}
							?>
								href="<?php echo INCLUDE_PATH ?>cadastrar-se-investidor"><b>- COMPRE UM CRÉDITO</b></a>
							<a <?php
							$url = isset($_GET['url']) ? $_GET['url'] : 'home';
							if ($url == 'portal-de-credito') {
								echo 'class="menu-active"';
							}
							?> href="<?php echo INCLUDE_PATH; ?>portal-de-credito">-
								PORTAL DE CRÉDITOS</a>
							<a <?php
							$url = isset($_GET['url']) ? $_GET['url'] : 'home';
							if ($url == 'como-funciona') {
								echo 'class="menu-active"';
							}
							?> href="<?php echo INCLUDE_PATH; ?>como-funciona">- COMO
								FUNCIONA</a>
						</div><!--submenu-->
					</li>
					<li><a <?php
					$url = isset($_GET['url']) ? $_GET['url'] : 'home';
					if ($url == 'sobre-nos') {
						echo 'class="menu-active"';
					}
					?> href="<?php echo INCLUDE_PATH ?>sobre-nos">SOBRE NÓS</a></li>
					<li><a <?php
					$url = isset($_GET['url']) ? $_GET['url'] : 'home';
					if ($url == 'contato') {
						echo 'class="menu-active"';
					}
					?> href="<?php echo INCLUDE_PATH ?>contato">CONTATO</a></li>
					<li><a <?php
					$url = isset($_GET['url']) ? $_GET['url'] : 'home';
					if ($url == 'login') {
						echo 'class="menu-active"';
					}
					?> href="<?php echo INCLUDE_PATH ?>login">LOGIN</a></li>
				</ul>
			</div><!--menu-desktop-->
		</div><!--container-->
	</header>

	<?php

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	if (file_exists('pages/' . $url . '.php')) {
		include('pages/' . $url . '.php');
	} else {
		if ($url != 'contato') {
			$pageof = true;
			include('pages/pageoff.php');
		} else {
			include('pages/home.php');
		}

	}

	?>

	<footer <?php
	if (isset($pageof) && $pageof == true) {
		echo 'class="fixes"';
	}
	?>>
		<div class="container">
			<div class="menu-desktop footer-menu">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH ?>portal-de-credito">CRÉDITOS</a></li>
					<li><a <?php
					$url = isset($_GET['url']) ? $_GET['url'] : 'home';
					if ($url == 'sobre-nos') {
						echo 'class="menu-active"';
					}
					?> href="<?php echo INCLUDE_PATH ?>sobre-nos">SOBRE NÓS</a></li>
					<li><a <?php
					$url = isset($_GET['url']) ? $_GET['url'] : 'home';
					if ($url == 'contato') {
						echo 'class="menu-active"';
					}
					?> href="<?php echo INCLUDE_PATH ?>contato">CONTATO</a></li>
					<li><a <?php
					$url = isset($_GET['url']) ? $_GET['url'] : 'home';
					if ($url == 'login') {
						echo 'class="menu-active"';
					}
					?> href="<?php echo INCLUDE_PATH ?>login">LOGIN</a></li>
				</ul>
			</div><!--menu-desktop-->
			<div class="logo logo-footer">
				<a href="<?php echo INCLUDE_PATH ?>index.php"><img src="<?php echo INCLUDE_PATH ?>img/logo.png"></a>
			</div>
		</div><!--container-->
	</footer>

	<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
		integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/functions-home.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/menu-header.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/functions-portal.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/slick.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/slider.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/functions-faq.js"></script>
	<script src="<?php echo INCLUDE_PATH ?>js/functions-form.js"></script>
	<?php
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	if ($url == 'home' || $url == '' || $url == 'contato') {
		?>
		<script src="<?php echo INCLUDE_PATH ?>js/contato.js"></script>
		<?php } ?>

	<?php
	if ($url == 'como-funciona') {
		?>
		<script src="<?php echo INCLUDE_PATH ?>js/js-btn-vend-comp.js"></script>
		<?php
	}
	?>
	<script>
		$(document).ready(function () {
			$('.btn-vendedor').click(function () {
				$('.form-vendedor').slideDown();
				$('.form-investidor').slideUp();
				$(this).css('background-color', '#6E98C7');
				$('.btn-investidor').css('background-color', 'gray');
			});
			$('.btn-investidor').click(function () {
				$('.form-vendedor').slideUp();
				$('.form-investidor').slideDown();
				$(this).css('background-color', '#6E98C7');
				$('.btn-vendedor').css('background-color', 'gray');
			})
		})
	</script>

	<script>
		$(document).ready(function () {
			$('#cadastro').submit(function () {
				fbq('track', 'Lead');
			})
		})

	</script>


</body>

</html>