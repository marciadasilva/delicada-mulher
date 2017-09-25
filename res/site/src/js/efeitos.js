$(document).ready(function(){

	/*$("#logotipo").on("mouseover",function(){
		
		$("#banner h1").addClass("efeito");

	}).on("mouseout", function(){

		$("#banner h1").removeClass("efeito");

	});*/

	$("#input-search").on("focus", function(){

		$("li.search").addClass("ativo");

	}).on("blur", function(){

		$("li.search").removeClass("ativo");				

	});

	$(".thumbnails").owlCarousel({
 
      //autoPlay: 3000,
      items : 4
 
  	});

  	var owl = $(".thumbnails").data('owlCarousel');

  	$('#btn-news-prev').on("click", function(){

  		owl.prev();

  	});

  	$('#btn-news-next').on("click", function(){

  		owl.next();

  	});

  	$("#page-up").on("click", function(event){

  		$("body").animate({
  			scrollTop:0
  		}, 1000);

  		event.preventDefault();

  	});

  	$("#btn-bars").on("click", function(){

  		$("header").toggleClass("open-menu");

  	});

  	$("#menu-mobile-mask, .btn-close").on("click", function(){

  		$("header").removeClass("open-menu");


  	});

  	$("#btn-search").on("click", function(){

  		$("header").toggleClass("open-search");
  		$("#input-search-mobile").focus();

  	});


    var $w = $(window);

    $w.on("scroll", function(){
        if( $w.scrollTop() > 50 ) {
            $("nav").removeClass("navbar-transparent");
        } else if( $w.scrollTop() < 50 ) {
            $("nav").addClass("navbar-transparent");
        }
    });

});

var number = 1;

function change_color(value){

	if(number == 1 && value == -1){
        number = 3;
	} else if (number == 3 && value == 1){
		number = 1;
    } else{
		number += value;
	}

    switch(number){
        case 1:
            $(".change_color").css("color","#616161");
            break;
        case 2:
            $(".change_color").css("color","white");
            break;
        case 3:
            $(".change_color").css("color","#616161");
            if (number == 1 && value == 1){
            	number = 1;
            }
            break;
    }

}

function change_color_item(item){

    switch(item){
        case 1:
            $(".change_color").css("color","#616161");
            break;
        case 2:
            $(".change_color").css("color","white");
            break;
        case 3:
            $(".change_color").css("color","#616161");
            break;
    }
}
