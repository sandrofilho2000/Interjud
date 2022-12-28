$(document).ready(function(){
	hoverBtn();
	carregarDinamico();
	//escolhaBtn();
	/*
	function escolhaBtn(){
		$('.escolha-comprador').click(function(){
			console.log('click comprador');
			$('.escolha-vendedor').attr('class','escolha-vendedor escolha-disable');
			$('.escolha-comprador').attr('class','escolha-comprador escolha-active');
		})
		$('.escolha-vendedor').click(function(){
			console.log('click vendedor');
			$('.escolha-vendedor').attr('class','escolha-vendedor escolha-active');
			$('.escolha-comprador').attr('class','escolha-comprador escolha-disable');
		})
	}
*/

	function hoverBtn(){
		$('.escolha-comprador').attr('class','escolha-comprador escolha-disable');
		$('.escolha-vendedor').attr('class','escolha-vendedor escolha-active');
		$('.escolha-comprador').mousedown(function(){
			//$('.escolha-active').attr('class','escolha-vendedor escolha-disable');
			$('.escolha-comprador').attr('class','escolha-comprador escolha-active');
			$('.escolha-vendedor').attr('class','escolha-vendedor escolha-disable');
		})
		$('.escolha-vendedor').mousedown(function(){
			//$('.escolha-disable').attr('class','escolha-vendedor escolha-active');
			$('.escolha-comprador').attr('class','escolha-comprador escolha-disable');
			$('.escolha-vendedor').attr('class','escolha-vendedor escolha-active');
		})
	}

	function carregarDinamico(){

		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			//$('.container-principal').load('http://localhost/interjud/'+pagina+'.php');
			window.history.pushState('','',pagina);
			return false;
		})
	}

})