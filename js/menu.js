/*		MENU		*/
$(document).ready(function () {
	
	var trocar = true;

	$("#icon-menu").click(function(){

		if(trocar){

			$("nav").animate({
				"height":"200px"
				},300
			);

			$("#icon-menu").animate({
				"margin-top":"167px"
				},300
			);

			trocar = false;

		}else{

			$("nav").animate({
				"height":"32px"
				},300
			);

			$("#icon-menu").animate({
				"margin-top":"0px"
				},300
			);
			trocar = true;

		}

	});

	$("#bttopheader,#btportfolio,#bthabilidade,#btcontato,#btfooter").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
   });

});