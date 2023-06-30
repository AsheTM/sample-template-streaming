<script>
	var isWebkit = /Webkit/i.test(navigator.userAgent),
		isChrome = /Chrome/i.test(navigator.userAgent),
		isMobile = !!("ontouchstart" in window),
		isAndroid = /Android/i.test(navigator.userAgent);
	if (isMobile && isAndroid && !isChrome) {
		alert("Velocity.jsmarche sur tout les navigateurs mobiles,ce demo 3D est pour les apparails iOS ou Android, et ca marche juste dans Chrome.");
	}
	function r (min, max) {
	    return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	$.Velocity.defaults.easing = "easeInOutsine";
	var dotsCount,
		dotsHtml = "",
		$count = $("#count"),
		$dots;
	for (var i = 0; i < dotsCount; i++) {
		dotsHtml += "<div class='dot'></div>";
	}
	$dots = $(dotsHtml);
	$count.html(dotsCount);
	var $container = $("#SplashScreen");
	var screenWidth = window.screen.availWidth,
		screenHeight = window.screen.availHeight,
		chromeHeight = screenHeight - (document.documentElement.clientHeight || screenHeight);
	var translateZMin = -725,
		translateZMax = 600;
	var containerAnimationMap = {
			perspective: [ 215, 50 ],
			opacity: [ 0.90, 0.55 ]
		};
	if (!isIE) {
		containerAnimationMap.rotateZ = [ 5, 0 ];
	}
	$container
		.css("perspective-origin", screenWidth/2 + "px " + ((screenHeight * 0.45) - chromeHeight) + "px")
		.velocity(containerAnimationMap, { duration: 800, loop: 2, delay: 3250 });
	if (isWebkit) {
		$dots.css("boxShadow", "0px 0px 4px 0px #4bc2f1");
	}
	$dots
		.velocity({ 
			translateX: [ 
				function() { return "+=" + r(-screenWidth/2.5, screenWidth/2.5) },
				function() { return r(0, screenWidth) }
			],
			translateY: [
				function() { return "+=" + r(-screenHeight/2.75, screenHeight/2.75) },
				function() { return r(0, screenHeight) }
			],
			translateZ: [
				function() { return "+=" + r(translateZMin, translateZMax) },
				function() { return r(translateZMin, translateZMax) }
			],
			opacity: [ 
				function() { return Math.random() },
				function() { return Math.random() + 0.1 }
			]
		}, { duration: 6000 })
		.velocity("reverse", { easing: "easeOutQuad" })
		.appendTo($container);
	</script>