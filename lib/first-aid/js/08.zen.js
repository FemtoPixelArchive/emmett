

/*
 *
 * ZEN - HTML5-CSS3 Audio Player
 * by @simurai (simurai.com)
 *
 * Most of this code by: @maboa (happyworm.com)
 * and: @quinnirill (niiden.com/jussi/)
 *
 */


zenPlayerItem = null;
zenPlayerCd = null;
zenStatus = "stop";
zenDragging = false;
function zenPlayer(){    
		
  	var status = zenStatus;
	var dragging = zenDragging;
	

	
	// init
	
	zenPlayerItem = $(".player");
		
	zenPlayerItem.jPlayer({
    	swfPath: "js",
		supplied: "oga, mp3, m4a"
  	});  




	
	// preload, update, end
	
	
	
	zenPlayerItem.bind($.jPlayer.event.progress, function(event) {    
			
		var audio = $('.player audio').get(0);
		var pc = 0;    
				
		if ((audio.buffered != undefined) && (audio.buffered.length != 0)) {
		 	pc = parseInt(((audio.buffered.end(0) / audio.duration) * 100), 10); 
		  	displayBuffered(pc);
		  	if(pc >= 100) {
		  		$('#zen .buffer').addClass("loaded");
		  	}  
		}        
		
	});
	
	//zenPlayerItem.bind($.jPlayer.event.loadeddata, function(event) {    
		//$('#zen .buffer').addClass("loaded");    
	//});
	
	zenPlayerItem.bind($.jPlayer.event.timeupdate, function(event) { 
		var pc = event.jPlayer.status.currentPercentAbsolute;
		if (!dragging) { 
	    	displayProgress(pc);
		}
	});
	
	zenPlayerItem.bind($.jPlayer.event.ended, function(event) {   
		playRandomTrack();
	});
	
	
	
	
	
	// play/pause
	
	$("#zen .button").bind('mousedown', function() {
		// not sure if this can be done in a simpler way.
		// when you click on the edge of the play button, but button scales down and doesn't drigger the click,
		// so mouseleave is added to still catch it.
		$(this).bind('mouseleave', function() {
			$(this).unbind('mouseleave');
			zenPlayerClick();
		});
	});
	
	$("#zen .button").bind('mouseup', function() {
		$(this).unbind('mouseleave');
		zenPlayerClick();
	});
	// draggin
	
	var clickControl = $('#zen .drag');
	
	clickControl.grab({
		onstart: function(){
			dragging = true;
			$('#zen .button').css( "pointer-events", "none" );
			_gaq.push(['_trackEvent', 'Player', 'drag_start']);
			
		}, onmove: function(event){
			var pc = getArcPc(event.position.x, event.position.y);
			zenPlayerItem.jPlayer("playHead", pc).jPlayer("play");
			displayProgress(pc);
			_gaq.push(['_trackEvent', 'Player', 'drag_move']);			
		}, onfinish: function(event){
			dragging = false;
			var pc = getArcPc(event.position.x, event.position.y);
			zenPlayerItem.jPlayer("playHead", pc).jPlayer("play");
			$('#zen .button').css( "pointer-events", "auto" );
			_gaq.push(['_trackEvent', 'Player', 'drag_end']);
		}
	});	
	
	
	
	
	
	
	// functions
	
	function displayProgress(pc) {
		var degs = pc * 3.6+"deg"; 
		$('#zen .progress').css({rotate: degs}); 		
	}
	function displayBuffered(pc) {
		var degs = pc * 3.6+"deg"; 
		$('#zen .buffer').css({rotate: degs}); 		
	}
	
	function getArcPc(pageX, pageY) { 
		var	self	= clickControl,
			offset	= self.offset(),
			x	= pageX - offset.left - self.width()/2,
			y	= pageY - offset.top - self.height()/2,
			a	= Math.atan2(y,x);  
			
			if (a > -1*Math.PI && a < -0.5*Math.PI) {
		   a = 2*Math.PI+a; 
		} 

		// a is now value between -0.5PI and 1.5PI 
		// ready to be normalized and applied   			
		var pc = (a + Math.PI/2) / 2*Math.PI * 10;   
		   
		return pc;
	}
	

	
	
}


function zenPlayerClick(elm, forceplay) {
	forceplay = (!forceplay) ? false : true;
	if (elm) {
		zenPlayerCd = elm;
	} else if ($('#turntable')) {
		zenPlayerCd = $('#turntable');
	}
	
	if(zenStatus != "play" || forceplay) {
		zenStatus = "play";
		$('#soundpause').show();
		$('#soundplay').hide();
		$("#zen").addClass( "play" );
		zenPlayerCd.addClass('playcd');
		zenPlayerItem.jPlayer("play");
	} else {
		$('#zen .circle').removeClass( "rotate" );
		$("#zen").removeClass( "play" );
		zenStatus = "pause";
		$('#soundpause').hide();
		$('#soundplay').show();
		zenPlayerCd.removeClass('playcd');
		zenPlayerItem.jPlayer("pause");
	}
}

function arrangeZen() {
	$('#zencase').get(0).appendChild($('#zen').get(0));
}