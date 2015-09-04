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

		$("#portfolio-window-view img").remove();

		$("#portfolio-window-background").fadeIn(200);
		$("#portfolio-window").fadeIn(200);

		var wheight = $(window).height();
		$("#portfolio-window").css("height", wheight);

		var titlebox = $(this).parent().parent().find("#portfolio-info-title p").text();
		var textbox = $(this).parent().parent().find("#portfolio-info-text p").text();
		var sitebox = $(this).parent().parent().find("#portfolio-info-site p").text();
		var viewbox = $(this).parent().parent().find("#portfolio-info-view").html();

		$("#window-info-title p").text(titlebox);
		$("#window-info-text p").text(textbox);
		$("#window-info-site p").text(sitebox);
		$("#portfolio-window-view").html(viewbox);

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



