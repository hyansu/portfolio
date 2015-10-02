/*		MENU		*/
$(document).ready(function () {
	
	$("#icon-menu #img-icon-back").hide();
	var trocar = true;

	$("#img-icon-menu").click(function(){

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

	/*RECOLHE O MENU AO CLICAR NA BOX DO PORTFOLIO*/

	$("#portfolio-bt-plus img").click(function(){

			if(!trocar){

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

});