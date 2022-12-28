$(function(){
	$('.depoimentos-wraper').slick({
		slidesToShow: 3,
		infinite:false,
		arrows: false,
		dots: false,
		centerMode:false,
		responsive: [
		{
			breakpoint: 900,
			settings:{
				centerMode: false,
				arrows: false,
				infinite: false,
				slidesToShow:2,
				dots: true,
			}
		},
		{
			breakpoint: 640,
			settings:{
				centerMode: false,
				arrows: false,
				infinite: false,
				slidesToShow:1,
				dots: true,
			}
		}
		]
	});

	$(".owl-carousel").owlCarousel({
        loop:!0,
        margin:10,
        arrowNav: false,
        responsiveClass:true,
        
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:false
            }
        }
    })   

	

})