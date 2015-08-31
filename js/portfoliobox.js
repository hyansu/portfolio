/*		PORTFOLIO		*/

$(document).ready(function(){

	$(".portfolio-background, .portfolio-info").hide();

	$(".portfolio-box").hover(function(){

		$(this).find(".portfolio-background, .portfolio-info").fadeToggle(300);

	});

});