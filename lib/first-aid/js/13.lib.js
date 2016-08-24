auraTime = '';
openedBox = false;
menuDisplayed = false;
global = false;
globalLoad = false;
$(document).ready(function () {
	//$('#nav-list > div div.back').css('visibility', 'hidden');
	$('.box .links').css('display', 'none');
	shineAura();
	//auraTime = setInterval(shineAura, 4000);
	
	function mySideChange(front) {
		if (front) {
			$(this).parent().find('div.front').css('visibility', 'visible').show();
			$(this).parent().find('div.back').css('visibility', 'hidden');
		} else {
			$(this).parent().find('div.front').hide();
			$(this).parent().find('div.front').css('visibility', 'hidden');
			$(this).parent().find('div.back').css('visibility', 'visible');
			$(this).parent().find('div.cover').css('z-index', 1);
		}
	}
		
	$('body').delegate('#nav-list .box .front', 'click', 
		function () {
			openedBox = true;
			if (auraTime) {
				clearInterval(auraTime);
				$("#aura").stop().animate({textShadow: "#fff 0px 0px 200px;"}, 1).show().animate({textShadow: "#fff 0px 0px 0px;"}, 2000);
			}
			$(this).parent().parent().animate({marginLeft:'-400px'}, 200, function () {
				$(this).find('.cover').stop().rotate3Di('toggle', 500, {sideChange : mySideChange});
			});
		}
	);
	
	//$('.support').get(0).appendChild($('#zen').show().get(0))
	$('body').delegate('.back .tracks a', 'click', function (e) {
		e.preventDefault();
		if ($(this).parents('.box').find('.support').get(0)) {
			$(this).parents('.box').find('.support').get(0).appendChild($('#zen').get(0));
		} else if ($('#turntable').get(0)){
			$('#turntable').parent().get(0).appendChild($('#zen').get(0));
		}
		zenPlayerItem.jPlayer("setMedia", {
			mp3: $(this).attr('href').replace('.ogg', '.mp3'),
			oga: $(this).attr('href'),
		});
		if ($(this).parents('.box').find('.support .cd').hasClass('playcd')) {
			zenPlayerClick($(this).parents('.box').find('.support .cd'), true);
		} else if ($('#turntable').get(0)){
			zenPlayerClick($('#turntable').parents('.box').find('.support .cd'), true);
		} else {
			zenPlayerClick(null, true);
		}
		changeTitle($(this).attr('title'));
	});
	
	function kode() {
		_gaq.push(['_trackEvent', 'event', 'FirstAid-KonamiCode']);
		var offset = $('#nyan').position().left;
		$('#nyan').fadeIn().animate({"right" : 0}, 2200, function () {$(this).fadeOut(function () {$('#nyan').position();$(this).css('right', 'auto');})});
		global = true;
	}

	function changeTitle(text) {
		$("#title").stop().html(text).animate({textShadow: "#fff 0px 0px 200px;"}, 1).show().animate({textShadow: "#fff 0px 0px 0px;"}, 2000, function() {
			$(this).stop().animate({bottom:0}, 2000, function () {
				$(this).stop().animate({textShadow: "#fff 0px 0px 200px;"}, 2000, function () {
					$(this).stop().hide();
				});
			});
		});
	}
	
	$('#random').click(function (e) {
		e.preventDefault();
		playRandomTrack();
		return false;
	});
	
	$.easing.bouncy = function (x, t, b, c, d) {
		var s = 1.70158;
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	}

	// create custom tooltip effect for jQuery Tooltip
	$.tools.tooltip.addEffect("bouncy",

		// opening animation
		function(done) {
			this.getTip().animate({top: '+=15'}, 500, 'bouncy', done).show();
		},

		// closing animation
		function(done) {
			this.getTip().animate({top: '-=15'}, 500, 'bouncy', function()  {
				$(this).hide();
				done.call();
			});
		}
	);
	toolTips();	
	zenPlayer();
	/**/
	$(window).bind('resize', resize);
	$(window).bind('mousemove', move);
	$(window).bind('orientationchange', resize);
	/**/
	initStarfield();
	 
	$.address.change(function(event) {
		// do something depending on the event.value property, e.g.
		if (!globalLoad) {
			globalLoad = true;
		} else {			
			arrangeZen();
			_gaq.push(['_trackPageview', event.value]);
			$('#content').fadeOut().load(event.value, function (response) {
				initCarousel();
				initPhotos();
				toolTips();
				if ($('#turntable').get(0) && zenStatus == 'play') {
					$('#turntable').addClass('playcd');
					$('#turntable').parent().get(0).appendChild($('#zen').get(0));
				}
				$('#content').fadeIn();
			});
		}
	});
	$('a').click(function(e) {
		if ($(this).data('tag')) {
			_gaq.push(['_trackEvent', 'Click', 'FirstAid-' + $(this).data('tag')]);
		}
		if (($(this).attr('href') == '#')) {
			e.preventDefault();
		} else if (($(this).attr('rel') !== 'nolink') && ($(this).attr('href') != '#')  && ($(this).attr('href').indexOf('http://') == -1)) {
			e.preventDefault();
			$.address.value($(this).attr('href'));
		}
	});
	
	$('#soundrandom').click(function () {
		playRandomTrack();
		if ($('#soundplay').css('display') !== 'none') {
			$('#soundplay').show();
			$('#soundpause').hide();
		}
	});
	
	$('#soundplay').click(function(){zenPlayerClick()});
	$('#soundpause').click(function(){zenPlayerClick()});

	$('#menu > ul > li').hover(function () {
		$(this).find('ul').show();
	}, function () {
		$(this).find('ul').hide();
	});

	/***/
	konami = new Konami();
	konami.code = kode;
	konami.load();
	initCarousel();
	playRandomTrack();
	initPhotos();
	setTimeout(showMenuFooter, 10000);
	$('body').click(function () {
		showMenuFooter();
	});
});


function showMenuFooter() {
	if (!menuDisplayed) {
		menuDisplayed = true;
		$('#menu').fadeIn(2000);
		$('#footer').fadeIn(2000);
		$('#donate').fadeIn(2000);
		if ($('.box .links').get(0)){
			$('.box .links').fadeIn(2000);
		}
	}
}


function initPhotos() {
	$('#emmett_photos').coinslider({ hoverPause: false, navigation: false, height:224, width:300, delay:3000 });
	$('#cedric_photos').coinslider({ hoverPause: false, navigation: false, height:400, width:300, delay:3000 });
	$('#jay_photos').coinslider({ hoverPause: false, navigation: false, height:400, width:300, delay:3000 });
	$('#maxime_photos').coinslider({ hoverPause: false, navigation: false, height:400, width:300, delay:3000 });
	$('#romeo_photos').coinslider({ hoverPause: false, navigation: false, height:400, width:300, delay:3000 });
}

function shineAura() {
	$("#aura").stop().animate({textShadow: "#fff 0px 0px 200px;"}, 1).show().animate({textShadow: "#fff 0px 0px 0px;"}, 2000, function() {
				$(this).stop().animate({textShadow: "#fff 0px 0px 200px;"}, 2000, function () {
					$(this).stop().animate({textShadow: "#fff 0px 0px 200px;"}, 1).show().animate({textShadow: "#fff 0px 0px 0px;"}, 2000, function () {
						$(this).stop().hide();
					});
				});
		});
}

function playRandomTrack() {
	var collection = $('.back .tracks a');
	$(collection[Math.floor(Math.random()*collection.length)]).trigger('click');
}

function toolTips() {
	$("a.tip").each (function () {
		var id = $(this).attr('id');
		$(this).tooltip({
			// use div.tooltip as our tooltip
			tip: '#tip_' + id,

			// use the fade effect instead of the default
			effect: 'bouncy',

			// make fadeOutSpeed similar to the browser's default
			fadeOutSpeed: 100,

			// the time before the tooltip is shown
			predelay: 400,

			// tweak the position
			position: "bottom right",
			offset: [-150, -135]
		});
	});
}
