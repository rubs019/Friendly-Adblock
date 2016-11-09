if( window.isAdblock !== undefined ){
	$('#popup').animate({bottom: '0px'}, 1000);

	$('#pop-close').click(function(){
		$('#popup').animate({bottom: '-350px'}, 1500)
	});
}
