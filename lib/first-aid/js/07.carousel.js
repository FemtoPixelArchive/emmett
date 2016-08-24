CAROUSEL_ACTION = false;

function carouselPrev () {
	if (!CAROUSEL_ACTION) {
		CAROUSEL_ACTION = true;
		//slide the item            
		$('#nav-list .li:first').animate({'left' : '100%'}, 750,function(){    

			//move the last item and put it as first item               
			$('#nav-list .li:first').before($('#nav-list .li:last'));           

			//set the default item to correct position
			$('#nav-list .li:first').css({'left' : '-100%'}).animate({'left' : '0%'}, 750, function () {CAROUSEL_ACTION = false;});
			if ($('#nav-list .li:first .support .cd').get(0) && $('#zen').get(0)) {
				$('#nav-list .li:first').find('.support').get(0).appendChild($('#zen').get(0));
			}         
			
		});
	}
	//cancel the link behavior
	return false;
}

function carouselNext() {
	 
	if (!CAROUSEL_ACTION) {
		CAROUSEL_ACTION = true;
		//slide the item
		$('#nav-list .li:first').animate({'left' : '-100%'}, 750, function () {
			 
			//move the first item and put it as last item
			$('#nav-list .li:last').after($('#nav-list .li:first'));                  
			 
			//set the default item to correct position
			$('#nav-list .li:first').css({'left' : '100%'}).animate({'left' : '0%'}, 750, function () {CAROUSEL_ACTION = false;});
			if ($('#nav-list .li:first .support .cd').get(0) && $('#zen').get(0)) {
				$('#nav-list .li:first').find('.support').get(0).appendChild($('#zen').get(0));
			}
		});
	}
	//cancel the link behavior
	return false;
}

function autoOpenBox() {
	if (!openedBox) {
		$($('#nav-list .box .front').get(0)).trigger('click');
	}
}

function initCarousel() {
    //move the last item before first item, just in case user click prev button
    //$('#nav-list .li:first').before($('#nav-list .li:last'));
    
    //hide undisplayed covers
    //$('#nav-list .li').css({'left' : '-100%'});
    openedBox = false;
    if ($('#nav-list .box .front').get(0)) {
		setTimeout(autoOpenBox, 5000);
    }
    //set the default item to the correct position 
    $('#nav-list .li:first').css({'left' : '0%'});
 
    //if user clicked on prev button
    $('body').delegate('#prev', 'click', carouselPrev);
    $('body').delegate('#next', 'click', carouselNext);
}