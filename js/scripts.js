window.onload = function() {
		$("#nav-collapse").click(showHideMenu);	
	}
	
	function showHideMenu() {
		var id = $(this).attr("href");
		$(id).toggle();
		return false;
}

$(document).ready(function(){
		
  		$('.bxslider').bxSlider({
			mode: 'fade',
			slideWidth:960,
			auto: true,
  			autoControls: false,
			pause: 9000,
			speed: 2500
		})
  
});