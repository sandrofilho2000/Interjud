<?php

	session_start();
	ob_start();

	date_default_timezone_set('America/Sao_Paulo');

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('BASE_DIR_PAINEL',__DIR__.'/painel');
	define('NOME_EMPRESA','INTERJUD');
	define('INCLUDE_PATH','https://www.interjud.com.br/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
	define('HOST','interjud.mysql.dbaas.com.br');
	define('USER','interjud');
	define('PASSWORD','Quick_26');
	define('DATABASE','interjud');

	function pegaCargo($cargo){
		return Painel::$cargos[$cargo];
	}

	function permissaoPagina($permissao){
		if($_SESSION['cargo'] >= $permissao){
			return;
		}else{
			include('pages/permissao-negada.php');
		}
	}

	function permissaoInput($permissao,$valor,$value){
		if($_SESSION['cargo'] >= $permissao){
			echo 'type="submit" name="'.$valor.'" value="'.$value.'"';
		}else{
			echo 'disabled name="permissao" value="Sem Permissao"';
		}
	}

	function selecionadoMenu($par){
		/*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
		$url = explode('/',@$_GET['url'])[0];
		if($url == $par){
			echo 'class="escolha-active"';
		}
	}
	

	
?>