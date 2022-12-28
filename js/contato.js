$(document).ready(function(){
	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');

		var divScroll = $(elemento).offset().top;

		$('html,body').animate({scrollTop:divScroll},3500);
	}

	$('input[name=nome]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('input[name=email]').focus(function(){
		resetarCampoInvalido($(this));
	})
	$('textarea').focus(function(){
		resetarCampoInvalido($(this));
	})

	$('form.form-contato').submit(function(){
		
		var nome = $('input[name=nome]').val();
		var email = $('input[name=email]').val();
		var mensagem = $('textarea').val();
		var select = $('option').val();

		if(verificarNome(nome) == false){
			aplicarCampoInvalido($('input[name=nome]'));
			return false;
		}else if(verificarEmail(email) == false){
			aplicarCampoInvalido($('input[name=email]'));
			return false;
		}else if(verificarMensagem(mensagem) == false){
			aplicarCampoInvalido($('textarea'));
			return false;
		}

		else{
			
			/*
			var form = $(this);
			$.ajax({

				url:'ajax/formularios.php',
				method:'post',
				dataType: 'json',
				data:form.serialize()
			}).done(function(data){
				
			});
			*/

			//alert("cheguei até aqui!");
			var form = $(this);

			$.ajax({
				beforeSend:function(){
					$('.overlay-loading').fadeIn();
					console.log("enviando!");
				},
				url:'ajax/formularios.php',
				method:'post',
				dataType: 'json',
				data:form.serialize(),
			}).done(function(data){
				if(data.sucesso){
					$('.overlay-loading').fadeOut();
					$('.sucess-box').fadeIn();
					setTimeout(function(){
						$('.sucess-box').fadeOut();
					},3000)
				}else{
					$('.overlay-error').fadeIn();
					$('.overlay-loading').fadeOut();
				}
			});


			
			$('input[type=submit]').val('ENVIANDO');
		}
	})

	function verificarNome(nome){
		if(nome == ''){
			return false;
		}
		var amount = nome.split(' ').length;
		var splitStr = nome.split('');
		if(amount >= 2){
			for(var i  = 0; i < amount; i++){
				if(splitStr[i].match(/[A-Za-z]{1,}$/)){

				}else{
					return false;
				}
			}
		}else{
			return false;
		}
	}

	function verificarTelefone(telefone){
		if(telefone == ''){
			return false;
		}
		if(telefone.match(/^\([0-9]{2}\)[0-9]{5}-[0-9]{4}$/) == null){
			return false;
		}
	}

	function verificarEmail(email){
		if(email == ''){
			return false;
		}
		if(email.match(/^([A-Za-z0-9-_.]{1,})+@+([A-Za-z.]{1,}$)/) == null){
			return false;
		}
	}

	function verificarMensagem(mensagem){
		if(mensagem == ''){
			return false;
		}
	}

	function aplicarCampoInvalido(el){
		el.css('color','red');
		el.css('border-bottom','2px solid #d91164');
		el.val('Campo Invalido');
	}
	function resetarCampoInvalido(el){
		el.css('color','white');
		el.css('border-bottom','1px solid white');
		el.val('');
	}
	
})
