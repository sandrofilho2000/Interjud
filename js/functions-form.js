$(document).ready(function(){
    let termos = document.querySelector('[name=termos-condicoes]')
	$('.input-click').click(function(){
		$(this).find('.p-nome').css('bottom','30px');
	})

	regEx1 = /[a-z]/
    regEx2 = /[A-Z]/
    regEx3 = /[0-9]/



	$('[name=senha]').keyup(function(){
        valor = $('[name=senha]').val()

        teste0 = $('[name=senha]').val().length >= 8
        teste1 = regEx1.test(valor)
        teste2 = regEx2.test(valor)
        teste3 = regEx3.test(valor)

        if(teste1){

        	$('.regEx1').css('color', '#282828')
        	
        }if(teste2){

        	$('.regEx2').css('color', '#282828')

        }if(teste3){

        	$('.regEx3').css('color', '#282828')

        }if(teste0){

        	$('.regEx0').css('color', '#282828')

        }




        if(!teste1){

        	$('.regEx1').css('color', '#d93a3a')
        	
        }if(!teste2){

        	$('.regEx2').css('color', '#d93a3a')

        }if(!teste3){

        	$('.regEx3').css('color', '#d93a3a')

        }if(!teste0){

        	$('.regEx0').css('color', '#d93a3a')

        }

        if(teste0 && teste1 && teste2 && teste3){

        	$('[name=senha]').css('border-bottom', '1px solid #004B9F')
       
        }else{

        	$('[name=senha]').css('border-bottom', '1px solid #d93a3a')

        }

        $('[type=password]').keyup(function(){

			if($('[name=senha]').val() != $('[name=cpassword]').val() || !teste0 || !teste1 || !teste2 || !teste3 || termos.checked == false){

				$('[name=signup]').css('pointer-events', 'none').css('opacity', '0.4')
				$('[name=cpassword]').css('border-bottom', '1px solid #d93a3a')

			}else if($('[name=senha]').val() == $('[name=cpassword]').val() && teste0 && teste1 && teste2 && teste3 && termos.checked == true){

				$('[name=signup]').css('pointer-events', 'initial').css('opacity', '1')
				$('[name=cpassword]').css('border-bottom', '1px solid #004B9F')

			}

			if($('[name=senha]').val() != $('[name=cpassword]').val()){

				$('[name=cpassword]').css('border-bottom', '1px solid #d93a3a')

			}else if($('[name=senha]').val() == $('[name=cpassword]').val()){


				$('[name=cpassword]').css('border-bottom', '1px solid #004B9F')

			}
        })

        

	})
    
	$('[name=termos-condicoes]').change(function(){
        	if($('[name=senha]').val() != $('[name=cpassword]').val() || !teste0 || !teste1 || !teste2 || !teste3 || termos.checked == false){

				$('[name=signup]').css('pointer-events', 'none').css('opacity', '0.4')


			}else if($('[name=senha]').val() == $('[name=cpassword]').val() && teste0 && teste1 && teste2 && teste3 && termos.checked == true){

				$('[name=signup]').css('pointer-events', 'initial').css('opacity', '1')


			}
    })

})