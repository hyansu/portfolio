/*		PORTFOLIO		*/

$(document).ready(function(){

/*		PORTFOLIO BOX		*/

	$(".portfolio-background, .portfolio-info").hide();

	$(".portfolio-box").hover(function(){

		$(this).find(".portfolio-background, .portfolio-info").fadeToggle(300);

	});


/*		PORTFOLIO WINDOW		*/


	$("#portfolio-window-background").hide();
	$("#portfolio-window").hide();

	$("#portfolio-bt-plus img").click(function(){
		$("#portfolio-window-background").fadeIn(200);
		$("#portfolio-window").fadeIn(200);

		var wheight = $(window).height();
		$("#portfolio-box").css("height", wheight);

		var titlebox = $(this).parent().parent().find("#portfolio-info-title p").text();

		$("#window-info-title p").text(titlebox);

	});

	$("#portfolio-window-background, #icon-menu").click(function(){
		$("#portfolio-window-background").fadeOut(200);
		$("#portfolio-window").fadeOut(200);
	});

	$(document).keyup(function(e) {
		if (e.keyCode == 27) {
			$("#portfolio-window-background").fadeOut(200);
			$("#portfolio-window").fadeOut(200);
		}
	});

});



