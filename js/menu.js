/*		MENU		*/
$(document).ready(function () {

	var swit = true;

	if(swit){
	
		$("#icon-menu").click(function(){

			$("nav").animate({
				"height":"200px"
			},300);

			$("#icon-menu").animate({
				"margin-top":"167px"
			},300);
		});

		swit = false;
		
	}

	if(!swit){

		$("#icon-menu").click(function(){

			$("nav").animate({
				"height":"32px"
			},300);

			$("#icon-menu").animate({
				"margin-top":"0px"
			},300);
		});

		swit = true;
	}
});