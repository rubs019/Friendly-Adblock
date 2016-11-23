jQuery(function($) {
	if (window.isAdblock === undefined) {
		if(initPop()){
			$('#popup').animate({bottom: '0px'}, 1000);

			$('#pop-close').click(function () {
				$('#popup').animate({bottom: '-350px'}, 1500)
			});

			$(document).click(function (e) {
				var container = $('#popup.front');

				if (!container.is(e.target) // if the target of the click isn't the container...
					&& container.has(e.target).length === 0) // ... nor a descendant of the container
				{
					container.animate({bottom: '-350px'}, 1500)
				}
			});
		}
	}
});
