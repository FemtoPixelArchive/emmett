var interval = null;
var keyStrokes = [];

function initAnalytics() {
	$('[data-tag]').click(function(e) {
		if ($(this).data('tag')) {
			_gaq.push(['_trackEvent', 'Click', 'NewLogo-' + $(this).data('tag')]);
		}
	});
}

function disappearOld(callback) {
  $('#logo img').fadeOut(5000, function() {
    $(this).remove();
    callback();
  });
}

function countdown() {
  var counter = parseInt($('#counter').html());
  counter--;
  $('#counter').html(counter);
  if (!counter) {
    document.location = '/fighting-fate-ep';
    clearInterval(interval);
  }
}

function initCountdown() {
  interval = setInterval(countdown, 1000);
  $(".later").fadeIn(200);
}

function getRand() {
  return Math.floor((Math.random() * 400) + 10);
}

function endAnimation() {
  $('#innerLogo').fadeOut(2000, function () {
    $(this).html('<img src="/img/new-logo/new-logo.png" />').fadeIn(2000, initCountdown);
  });
}

function animateNewLogo() {
    $('#logoTop')
        .delay(2000)
        .delay(getRand() + 200)
        .show(0)
        .delay(getRand() + 100)
        .hide(0)
        .delay(getRand() + 50)
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
      ;
    $('#logoBottom')
        .delay(2000)
        .delay(getRand() + 200)
        .show(0)
        .delay(getRand() + 100)
        .hide(0)
        .delay(getRand() + 50)
        .show(0)
        .delay(getRand() + 20)
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0)
        .delay(getRand())
        .hide(0)
        .delay(getRand())
        .show(0, endAnimation)
      ;
}

function appearNew() {
    var elementTop = document.createElement('div');
    elementTop.id='logoTop';
    elementTop.style.display='none';
    elementTop.innerHTML = '<img src="/img/new-logo/new-logo-top.png?1" />';
    var elementBottom = document.createElement('div');
    elementBottom.id='logoBottom';
    elementBottom.style.display='none';
    elementBottom.innerHTML = '<img src="/img/new-logo/new-logo-bottom.png?1" />';
    $('#innerLogo').css({width:500, height:500}).append(elementTop).append(elementBottom);
    animateNewLogo();
}

function initLogoChange() {
  disappearOld(appearNew);
}

function initKonami() {
	konami = new Konami();
	konami.code = function () {
		_gaq.push(['_trackEvent', 'event', 'NewLogo-KonamiCode']);
		document.location = "/new-logo/auto/download-album";
	};
	konami.load();
	$(document).keydown(function (e) {
    var typing = '';
    var keyPress = '';
    var regexp = /^U\+/;
    var array = [];
    array['code'] = e.keyCode;
    array['identifier'] = e.originalEvent.keyIdentifier;
    keyStrokes.push(array);
    if (keyStrokes.length > 10) {
      keyStrokes.shift();
    }
    for (index in keyStrokes) {
      keyPress = (regexp.test(keyStrokes[index]['identifier'])) 
        ? String.fromCharCode(keyStrokes[index]['code']) 
        : keyStrokes[index]['identifier'];
      typing += keyPress + ' ';
    }
    $('#typing').html(typing);
	});
}

$(document).ready(function() {
	initAnalytics();
	initKonami();
  initLogoChange();
});