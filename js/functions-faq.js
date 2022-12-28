$(document).ready(function(){
	
	$('#duv-um,#duv-dois,#duv-tres,#duv-quatro,#duv-cinco').change(function(){
		if($('#duv-um').is(":checked")){
			$('.faq-um').slideDown();
			$('.faq-dois').slideUp();
			$('.faq-tres').slideUp();
			$('.faq-quatro').slideUp();
			$('.faq-cinco').slideUp();
			//$('.txt-um,.sinal-um').css('color','#004b9f');
			$('.sinal-um').html('-');
			//$('.txt-dois,.sinal-dois').css('color','white');
			$('.sinal-dois,.sinal-tres,.sinal-quatro,.sinal-cinco').html('+');
			//$('.txt-tres,.sinal-tres').css('color','white');

		}else if($('#duv-dois').is(":checked")){
			$('.faq-dois').slideDown();
			$('.faq-um').slideUp();
			$('.faq-tres').slideUp();
			$('.faq-quatro').slideUp();
			$('.faq-cinco').slideUp();
			//$('.txt-um,.sinal-um').css('color','white');
			//$('.sinal-um').html('+');
			//$('.txt-dois,.sinal-dois').css('color','#004b9f');
			$('.sinal-dois').html('-');
			$('.sinal-um,.sinal-tres,.sinal-quatro,.sinal-cinco').html('+');
			//$('.txt-tres,.sinal-tres').css('color','white');
			//$('.sinal-tres').html('+');
		}else if($('#duv-tres').is(":checked")){
			$('.faq-dois').slideUp();
			$('.faq-um').slideUp();
			$('.faq-tres').slideDown();
			$('.faq-quatro').slideUp();
			$('.faq-cinco').slideUp();
			//$('.txt-dois,.sinal-dois').css('color','white');
			$('.sinal-dois,.sinal-um,.sinal-quatro,.sinal-cinco').html('+');
			//$('.txt-tres,.sinal-tres').css('color','#004b9f');
			$('.sinal-tres').html('-');
		}else if($('#duv-quatro').is(":checked")){
			$('.faq-dois').slideUp();
			$('.faq-um').slideUp();
			$('.faq-tres').slideUp();
			$('.faq-quatro').slideDown();
			$('.faq-cinco').slideUp();
			//$('.sinal-um').html('+');
			//$('.txt-dois,.sinal-dois').css('color','white');
			$('.sinal-quatro').html('+');
			//$('.txt-tres,.sinal-tres').css('color','#004b9f');
			$('.sinal-dois,.sinal-tres,.sinal-um,.sinal-cinco').html('+');
		}else if($('#duv-cinco').is(":checked")){
			$('.faq-dois').slideUp();
			$('.faq-um').slideUp();
			$('.faq-tres').slideUp();
			$('.faq-quatro').slideUp();
			$('.faq-cinco').slideDown();
			$('.sinal-um').html('+');
			//$('.txt-dois,.sinal-dois').css('color','white');
			$('.sinal-dois,.sinal-tres,.sinal-quatro,.sinal-um').html('+');
			//$('.txt-tres,.sinal-tres').css('color','#004b9f');
			$('.sinal-cinco').html('-');
		}
	})

	$('.duvida-single').click(function(){
		$(this).find('.resposta-duvida-faq').slideToggle();
	})

	const box = document.querySelectorAll('.box')

        for(let i = 0; i<box.length; i++){
            box[i].addEventListener('mouseover', function(e){     
                var video = box[i].children[0]
                
                video.play()
            })
            box[i].addEventListener('mouseout', function(e){
                var video = box[i].children[0]
                video.pause()
            }) 


			box[i].addEventListener('click', function(e){  
                var video = box[i].children[0]
	
                var overlay_all = document.querySelector('.overlay_all')
                var overlay_box = document.querySelector('.overlay_box')
                //var overlay_video = document.querySelector('.overlay_video')
                overlay_all.style.zIndex = '99999'
                overlay_all.style.display = 'flex'
                /* console.log(overlay_video)
                overlay_video.setAttribute('src', video.getAttribute('src')) */
            })

           
	}

	overlay_all = document.querySelector('.overlay_all')
	overlay_all.addEventListener('click', function(e){
		overlay_all.style.display = 'none'
		$("iframe").each(function() { 
			var src= $(this).attr('src');
			$(this).attr('src',src);  
		});
	})



/*
	$('#duv-one,#duv-two,#duv-tree,#duv-for,#duv-five').change(function(){
		if($('#duv-one').is(":checked")){
			$('.faq-one').slideDown();
			$('.faq-two').slideUp();
			$('.faq-tree').slideUp();
			$('.faq-for').slideUp();
			$('.faq-five').slideUp();
			$('.txt-one,.sinal-one').css('color','#004b9f');
			$('.sinal-one').html('-');
			$('.txt-two,.txt-tree,.txt-for,.txt-five').css('color','white');
			$('.sinal-two,.sinal-tree,.sinal-for,.sinal-five').html('+').css('color','white');
			//$('.txt-tres,.sinal-tres').css('color','white');
		}else if($('#duv-two').is(":checked")){
			$('.faq-one').slideUp();
			$('.faq-two').slideDown();
			$('.faq-tree').slideUp();
			$('.faq-for').slideUp();
			$('.faq-five').slideUp();
			$('.txt-two,.sinal-two').css('color','#004b9f');
			$('.sinal-two').html('-');
			$('.txt-one,.txt-tree,.txt-for,.txt-five').css('color','white');
			$('.sinal-one,.sinal-tree,.sinal-for,.sinal-five').html('+').css('color','white');
			//$('.txt-tres,.sinal-tres').css('color','white');
		}else if($('#duv-tree').is(":checked")){
			$('.faq-one').slideUp();
			$('.faq-two').slideUp();
			$('.faq-tree').slideDown();
			$('.faq-for').slideUp();
			$('.faq-five').slideUp();
			$('.txt-tree,.sinal-tree').css('color','#004b9f');
			$('.sinal-tree').html('-');
			$('.txt-one,.txt-two,.txt-for,.txt-five').css('color','white');
			$('.sinal-one,.sinal-two,.sinal-for,.sinal-five').html('+').css('color','white');
			//$('.txt-tres,.sinal-tres').css('color','white');
		}else if($('#duv-for').is(":checked")){
			$('.faq-one').slideUp();
			$('.faq-two').slideUp();
			$('.faq-tree').slideUp();
			$('.faq-for').slideDown();
			$('.faq-five').slideUp();
			$('.txt-for,.sinal-for').css('color','#004b9f');
			$('.sinal-for').html('-');
			$('.txt-one,.txt-two,.txt-tree,.txt-five').css('color','white');
			$('.sinal-one,.sinal-two,.sinal-tree,.sinal-five').html('+').css('color','white');
			//$('.txt-tres,.sinal-tres').css('color','white');
		}else if($('#duv-five').is(":checked")){
			$('.faq-one').slideUp();
			$('.faq-two').slideUp();
			$('.faq-tree').slideUp();
			$('.faq-for').slideUp();
			$('.faq-five').slideDown();
			$('.txt-five,.sinal-five').css('color','#004b9f');
			$('.sinal-five').html('-');
			$('.txt-one,.txt-two,.txt-tree,.txt-for').css('color','white');
			$('.sinal-one,.sinal-two,.sinal-tree,.sinal-for').html('+').css('color','white');
			//$('.txt-tres,.sinal-tres').css('color','white');
		}
	})
	*/
})