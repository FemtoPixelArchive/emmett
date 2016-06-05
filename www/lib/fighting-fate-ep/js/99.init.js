var loadedElements = 0,	elementsToLoad = 13;
var defaultVolume = 0.5;
var bAudioAutoStart = true;
var bAllowControls = false;


var loadImageHeight = 0;
var camera, scene, renderer, composer;
var currentCameraTarget = 'logo';
var completingLoader = false;

var fov = 70,
texture_placeholder,
isUserInteracting = false,
bCameraAllowMovement = false,
onMouseDownMouseX = 0, onMouseDownMouseY = 0,
lon = 0, onMouseDownLon = 0,
lat = 0, onMouseDownLat = 0,
phi = 0, theta = 0;

function accordion() {
	var oMenu = $(".accordion");
	var oMenuList = $(".accordion .atitle");
	oMenu.css('height', window.innerHeight - $('#myTitle').get(0).clientHeight + "px");
	oMenu.find('.inner').hide();
	oMenuList.click(function(eEvent) {
		hideDesc();
		$(eEvent.currentTarget).parent().siblings().find('.inner').animate({height:"1px"}, 300, function () {$(this).hide();});
		var visibleLength = $(".accordion .atitle:visible").length;
		$(eEvent.currentTarget).siblings('.inner').show().animate(
			{height:(oMenu.css('height').replace('px', '')-(visibleLength * oMenuList.get(0).clientHeight)+"px")}, 300);
	});
	$('#fullsite #album').trigger('click');
}

function displayMenu() {
	$('#fullsite').show().animate({left:0}, 500, accordion);				
}

function displayDesc() {
	$('#band-desc').show().animate({right:0}, 500);
}

function hideDesc() {
	$('#band-desc').show().animate({right:'-50%'}, 500);
}

function createWorld() {
	imgTexture = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/texture.jpg' );

	mesh = new THREE.Mesh( new THREE.SphereGeometry( 100000, 1000, 10 ), new THREE.MeshPhongMaterial( { map: imgTexture, bumpMap: imgTexture, bumpScale: 1, color: 0x000000, ambient: 0x777777, specular: 0x333333, shininess: 50, metal: true, shading: THREE.SmoothShading } ) );
	mesh.scale.x = -1;
	mesh.name = 'world';
	return mesh;
}

function createLogo() {
	var textGeo = new THREE.TextGeometry( 'EMMETT', {
		size: 750,
		height: 100,
		curveSegments: 0,

		font: "optimer",
		weight: "bold",
		style: "normal",

		bevelThickness: 0.1,
		bevelSize: 15,
		bevelEnabled: false

	});

	textGeo.computeBoundingBox();
	textGeo.computeVertexNormals();

	var centerOffset = -0.5 * ( textGeo.boundingBox.max.x - textGeo.boundingBox.min.x );
	
	var material = new THREE.MeshBasicMaterial({color: 0xffffff});

	var textMesh = new THREE.Mesh( textGeo, material );

	textMesh.position.x = centerOffset;
	textMesh.position.z = -2000;
	textMesh.name = 'logo';
	
	return textMesh;
}

function createAlbum() {
	var materials = [];
	
	var texture = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/cover.jpg' );
	var textureBack = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/back.jpg' );
	var oFront = new THREE.MeshBasicMaterial( { map: texture} );
	var oBack = new THREE.MeshBasicMaterial( { map: textureBack} );
	for (var i = 0; i < 3; i++) {
		materials.push(oFront);
		materials.push(oBack);
	}
					
	mesh = new THREE.Mesh( new THREE.CubeGeometry( 1, 2000, 2000, 1, 1, 1), new THREE.MeshFaceMaterial(materials) );
	mesh.position.x=-15000;
	mesh.position.y=15000;
	mesh.position.z=10000;
	mesh.name = 'album';
	return mesh;
}

function createStore() {
	var materials = [];
	
	var texture = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/coin_face.png' );
	var oTexture = new THREE.MeshBasicMaterial( { map: texture, transparent:true} );
	var oEmpty = new THREE.MeshBasicMaterial( { map: texture, transparent:true, opacity:0} );
	materials.push(oEmpty);
	materials.push(oEmpty);
	materials.push(oTexture);
	materials.push(oTexture);
	materials.push(oEmpty);
	materials.push(oEmpty);
					
	mesh = new THREE.Mesh( new THREE.CubeGeometry( 2000, 1, 2000, 1, 1, 1), new THREE.MeshFaceMaterial(materials) );
	
	mesh.name = "store";
	mesh.rotation.y=180;
	mesh.position.x=-2500;
	mesh.position.y=0;
	mesh.position.z=2000;
	return mesh;
}

function createCedric() {
	mesh = createCube('cedric');
	mesh.position.x=-2500;
	return mesh;
}

function createJay() {
	mesh = createCube('jay');
	mesh.position.x=-500;
	return mesh;
}

function createMaxime() {
	mesh = createCube('maxime');
	mesh.position.x=1500;
	return mesh;
}

function createRomeo() {
	mesh = createCube('romeo');
	mesh.position.x=3500;
	return mesh;
}

function createCube(sName) {
	var materials = [];
	
	var texture = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/'+sName+'-01.jpg' );
	var texture2 = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/'+sName+'-02.jpg' );
	var texture3 = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/'+sName+'-03.jpg' );
	var texture4 = THREE.ImageUtils.loadTexture( '/img/fighting-fate-ep/'+sName+'-04.jpg' );
	var oTexture = new THREE.MeshBasicMaterial( { map: texture} );
	var oTexture2 = new THREE.MeshBasicMaterial( { map: texture2} );
	var oTexture3 = new THREE.MeshBasicMaterial( { map: texture3} );
	var oTexture4 = new THREE.MeshBasicMaterial( { map: texture4} );
	
	materials.push(oTexture);
	materials.push(oTexture2);
	materials.push(oTexture);
	materials.push(oTexture2);
	materials.push(oTexture3);
	materials.push(oTexture4);	
					
	mesh = new THREE.Mesh( new THREE.CubeGeometry( 500, 500, 500), new THREE.MeshFaceMaterial(materials) );
	mesh.name = sName;
	mesh.position.y=-3000;
	mesh.position.z=-2000;
	return mesh;
}

function initListeners () {
	$('#loader').on('update', updateLoader);
	$('#fullsite #album').click(function() {travellingTo('album');});
	$('#fullsite #store').click(function() {travellingTo('store');});
	$('#fullsite .band').click(function() {travellingTo('logo');});
	$('#fullsite #cedric').click(function() {travellingTo('cedric');});
	$('#fullsite #jay').click(function() {travellingTo('jay');});
	$('#fullsite #maxime').click(function() {travellingTo('maxime');});
	$('#fullsite #romeo').click(function() {travellingTo('romeo');});
	$('#fullsite').delegate('.track', 'click', function(event, object) {playTitle($(event.currentTarget).data('id'));});
	
	$('[data-band]').click(function (e) {
		$.ajax({
			url : $(this).data('band'), 
			success: function (sResult) {
				$('#band-desc').html(sResult);
				displayDesc();
			}
		});
	});
}

function init() {

	var container, mesh;
	
	initListeners();
	initKonami();

	container = document.getElementById( 'container' );

	if (Detector.webgl) {
		setTimeout (function () {
			renderer = new THREE.WebGLRenderer( { antialias: false } );
			renderer.setSize( window.innerWidth, window.innerHeight );
			renderer.setClearColor( 0x000000, 1 );
			renderer.autoClear = false;
			renderer.gammaInput = true;
			renderer.gammaOutput = true;
			notifyLoader();
			setTimeout (function () {
				camera = new THREE.PerspectiveCamera( fov, window.innerWidth / window.innerHeight, 1, 1000000 );
				camera.target = new THREE.Vector3( 0, 0, 0 );
				camera.position = new THREE.Vector3( 0, 0, 0 );
				notifyLoader();
				setTimeout (function () {
					scene = new THREE.Scene();
					notifyLoader();
					setTimeout (function () {
						scene.add( createWorld() );
						notifyLoader();
						setTimeout (function () {
							scene.add( createLogo() );
							notifyLoader();
							setTimeout (function () {
								scene.add( createAlbum() );
								notifyLoader();
								setTimeout (function () {
									scene.add( createStore() );
									notifyLoader();
									setTimeout (function () {
										scene.add( createCedric() );
										notifyLoader();
										setTimeout (function () {
											scene.add( createJay() );
											notifyLoader();
											setTimeout (function () {
												scene.add( createMaxime() );
												notifyLoader();
												setTimeout (function () {
													scene.add( createRomeo() );
													notifyLoader();
													setTimeout (function () {
														// Lights
														var generalLight = new THREE.AmbientLight( 0xffffff );
														generalLight.name = 'generalLight';

														scene.add( generalLight );
														notifyLoader();
														setTimeout (function () {
															container.appendChild( renderer.domElement );
															//controls
															if (Detector.webgl) {
																if (bAllowControls) {
																	document.addEventListener( 'mousedown', onDocumentMouseDown, false );
																	document.addEventListener( 'mousemove', onDocumentMouseMove, false );
																	document.addEventListener( 'mouseup', onDocumentMouseUp, false );
																} else {
																	document.addEventListener( 'mousemove', onDocumentMouseMoveNoControl, false );
																}			
															}
															window.addEventListener( 'resize', onWindowResize, false );
															setTimeout (function () {
																initPostProcessing();
																notifyLoader();
																completeLoader();
															}, 1);
														}, 1);
													}, 1);
												},1);
											},1);
										},1);
									},1);
								},1);
							},1);
						},1);
					},1);
				},1);
			},1);
		},1);
	} else {
		notifyLoader();
		completeLoader();
	}
}

function onWindowResize() {

	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();

	renderer.setSize( window.innerWidth, window.innerHeight );

}

function onDocumentMouseDown( event ) {

	event.preventDefault();

	isUserInteracting = true;

	onPointerDownPointerX = event.clientX;
	onPointerDownPointerY = event.clientY;

	onPointerDownLon = lon;
	onPointerDownLat = lat;

}

function onDocumentMouseMove( event ) {

	if ( isUserInteracting ) {

		lon = ( onPointerDownPointerX - event.clientX ) * 0.1 + onPointerDownLon;
		lat = ( event.clientY - onPointerDownPointerY ) * 0.1 + onPointerDownLat;

	}
}

function onDocumentMouseMoveNoControl( event ) {
	if (bCameraAllowMovement) {
		lon = (event.clientX - window.innerWidth/2) * 0.5;
		lat = (event.clientY - window.innerHeight/2) * 0.5;
		
		oReturn = getCameraForObject(currentCameraTarget);
		
		camera.target.x = oReturn.target.x-lon;
		camera.target.y = oReturn.target.y-lat;
		camera.target.z = oReturn.target.z;
		
		camera.lookAt(camera.target);
	}
}

function getCameraForObject(cameraTarget) {
	var target = {};
	var position = {};
	var cameraObject = scene.getObjectByName(cameraTarget);
	target.x = cameraObject.position.x;
	target.y = cameraObject.position.y;
	target.z = cameraObject.position.z;
	switch (cameraTarget) {
		case 'logo' :
			target.x = (cameraObject.position.x)+2000;
			target.y = cameraObject.position.y+500;
			target.z = cameraObject.position.z;
			position.x = cameraObject.position.x+2000;
			position.y = cameraObject.position.y+500;
			position.z = cameraObject.position.z+2000;
			break;
		case 'album':
			position.x = cameraObject.position.x+1000;
			position.y = cameraObject.position.y;
			position.z = cameraObject.position.z-2000;
			break;
		case 'store':
			position.x = cameraObject.position.x+1000;
			position.y = cameraObject.position.y+1000;
			position.z = cameraObject.position.z-1000;
			break;
		case 'cedric':
		case 'jay':
		case 'maxime':
		case 'romeo':
			position.x = cameraObject.position.x;
			position.y = cameraObject.position.y;
			position.z = cameraObject.position.z+1000;
			break;
	}
	return {target: target, position:position};
}

function travellingTo(cameraTarget) {
	if (Detector.webgl) {
		//TWEEN.removeAll();
		bCameraAllowMovement = false;
		var bMovingTarget = true;
		var bMovingPosition = true;
		var selectedObject = getCameraForObject(cameraTarget);
	
		var tween = new TWEEN.Tween(camera.position).to(selectedObject.position, 1000).easing(TWEEN.Easing.Linear.None).onUpdate(function () {
			render();
		}).onComplete(function () {
			bMovingPosition = false;
			render();
			if (!bMovingPosition && !bMovingTarget) {
				bCameraAllowMovement = true;
				currentCameraTarget = cameraTarget;
			}
		}).start();
		var tween = new TWEEN.Tween(camera.target).to(selectedObject.target, 1000).easing(TWEEN.Easing.Linear.None).onUpdate(function () {
			camera.lookAt(camera.target);
			render();
		}).onComplete(function () {
			bMovingTarget = false;
			camera.lookAt(camera.target);
			render();
			if (!bMovingPosition && !bMovingTarget) {
				bCameraAllowMovement = true;
				currentCameraTarget = cameraTarget;
			}
		}).start();
	}
}

function onDocumentMouseUp( event ) {

	isUserInteracting = false;

}

function animate() {
	if (Detector.webgl) {
		scene.getObjectByName('album').rotation.y+=Detector.webgl ? 0.01 : 0.1;
		scene.getObjectByName('cedric').rotation.y+=Detector.webgl ? 0.01 : 0.1;
		scene.getObjectByName('jay').rotation.y+=Detector.webgl ? 0.01 : 0.1;
		scene.getObjectByName('maxime').rotation.y+=Detector.webgl ? 0.01 : 0.1;
		scene.getObjectByName('romeo').rotation.y+=Detector.webgl ? 0.01 : 0.1;
		scene.getObjectByName('store').rotation.y+=Detector.webgl ? 0.05 : 0.5;
		requestAnimationFrame( animate );
		TWEEN.update();
		render();
	}
}

function initPostProcessing()
{
	if ( Detector.webgl ) {
		composer = new THREE.EffectComposer( renderer );
		var renderPass = new THREE.RenderPass( scene, camera );
		
		var effectRender = new THREE.ShaderPass( THREE.CopyShader);
		effectRender.renderToScreen = true;
		
		var effectBloom = new THREE.BloomPass( 0.85 );
		
		composer.addPass( renderPass );
		composer.addPass( effectBloom );
		composer.addPass( effectRender );
	}
}

function render() {
	if ( Detector.webgl ) {
		if (bAllowControls) {
			lat = Math.max( - 85, Math.min( 85, lat ) );
			phi = THREE.Math.degToRad( 90 - lat );
			theta = THREE.Math.degToRad( lon );

			camera.target.x = 500 * Math.sin( phi ) * Math.cos( theta );
			camera.target.y = 500 * Math.cos( phi );
			camera.target.z = 500 * Math.sin( phi ) * Math.sin( theta );
			camera.lookAt( camera.target );
			// distortion
			camera.position.x = - camera.target.x;
			camera.position.y = - camera.target.y;
			camera.position.z = - camera.target.z;
		}

		composer.render();
	}
}

function playTitle(iNumber) {
	$('audio').remove();
	if (iNumber >= 1 && iNumber <= 9) {
		var sSound = '/audio/fighting-fate-ep/0'+iNumber;
		$('body').append('<audio><source src="'+sSound+'.ogg" type="audio/ogg"/><source src="'+sSound+'.mp3" type="audio/mpeg"/></audio>');
		$('audio').on('ended', function() {playTitle(0);});
	} else {
		$('body').append('<audio loop><source src="/audio/fighting-fate-ep/Fetal_Heartbeat.ogg" type="audio/ogg"/><source src="/audio/fighting-fate-ep/Fetal_Heartbeat.mp3" type="audio/mpeg"/></audio>');
	}
	var audioPlayer = $('audio').get(0)
	audioPlayer.volume = defaultVolume;
	audioPlayer.play();
}

function audioToggle() {
	var audioPlayer = $('audio').get(0);
	if (true == audioPlayer.paused) {
		audioPlayer.play();
	} else {
		audioPlayer.pause();
	}
}

function initAnalytics() {
	$('[data-tag]').click(function(e) {
		if ($(this).data('tag')) {
			_gaq.push(['_trackEvent', 'Click', 'FightingFateEp-' + $(this).data('tag')]);
		}
	});
}

function showSite() {
	$('.later').fadeIn(500, function() {displayMenu();TWEEN.removeAll();});
}

function allIsReady() {
	$('#loader').remove();
	$('#container').hide().fadeIn(500, function () {
		if (bAudioAutoStart) {
			playTitle(0);
			var audioPlayer = $('audio').get(0);
			audioPlayer.volume = 0;
			var tween = new TWEEN.Tween({volume:0}).to({volume:defaultVolume}, 1000).easing(TWEEN.Easing.Linear.None).onUpdate(function(e){
				audioPlayer.volume = e;
			}).start();
		}
		travellingTo('logo');
		setTimeout(showSite, 1000);
	});
}

function notifyLoader() {
	$('#loader').trigger('update');
}

function updateLoader() {
	loadedElements+=1;
	var percent = ((loadedElements/elementsToLoad)*100);
	$('#progress').css('width', percent+'%').css('height', loadImageHeight + 'px').css('margin-top', ((window.innerHeight-loadImageHeight)/2)+'px');
	if (100 == percent) {
		completeLoader();
	}
}

function completeLoader() {
	if (!completingLoader) {
		completingLoader = true;
		animate();
		$('#loader').fadeOut(500, allIsReady);
	}
}

function initKonami() {
	konami = new Konami();
	konami.code = function () {
		_gaq.push(['_trackEvent', 'event', 'FightingFateEP-KonamiCode']);
		playTitle(9);
		$('#album').siblings(".inner").find("ul").append('<li><a href="#" class="track" data-id="9" data-tag="track-playing-in-the-name">Hidden Site Track : Playing in the name &#9654;</a></li>');
	};
	konami.load();
}

function displayLoader() {
	$('#loader').show();
	loadImage = $('#loader #bar img');
	loadImageHeight = loadImage.get(0).clientHeight;
	loadImage.css('margin-top', ((window.innerHeight-loadImageHeight)/2)+'px')
	$('#load-background').css('height', loadImageHeight + 'px').css('margin-top', ((window.innerHeight-loadImageHeight)/2)+'px');
}

$(document).ready(function() {
	initAnalytics();
	displayLoader();
	setTimeout(init, 10);
});