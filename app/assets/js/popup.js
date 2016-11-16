jQuery(function($) {
	window.onload = function() {
		if (window.isAdblock === undefined) {
			if(initPop()){
				$('#popup').animate({bottom: '0px'}, 1000);

				$('#pop-close').click(function () {
					$('#popup').animate({bottom: '-350px'}, 1500)
				});
			}
		}
	}
});
