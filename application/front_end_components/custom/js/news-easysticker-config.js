$(document).ready(function(){
	$('.news').easyTicker({
		direction: 'up',
		easing: 'swing',
		interval: 2500,
		visible:4,
		mousePause: 1,
	controls: {
		up: '.btnUp',
		down: '.btnDown',
		toggle: '.btnToggle'
	}
	});
	 console.log("news sticker");
	
	/*
	$('.demo3').easyTicker({
		visible: 1,
		interval: 4000
	});
	
	
	$('.demo5').easyTicker({
		direction: 'up',
		visible: 3,
		interval: 2500,
		controls: {
			up: '.btnUp',
			down: '.btnDown',
			toggle: '.btnToggle'
		}
	});*/
});


/*
All configurations
<script>
$(function(){
$('.demo1').easyTicker({
direction: 'up', // up or down
easing: 'swing', // easing options
speed: 'slow', // animation speed
interval: 2000,
height: 'auto',
visible: 0, // change the number of default visible elements.
mousePause: 1, // pause on hover
controls: {
up: '',
down: '',
toggle: '',
playText: 'Play',
stopText: 'Stop'
}
});
});
</script>

*/