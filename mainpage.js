function onResize() {
	var height = (50 * $(window).height()) / 100;
	height = parseInt(height) + 'px';
	$("#canvas-div").css('height', height);
	colorCanvas();
}

function colorCanvas() {
	// Todo: Is there a JQuery way of getting the element? Just using $("#article-selector"); wasn't working
	var c=document.getElementById("article-selector");
	var ctx=c.getContext("2d");
	ctx.fillStyle="#FF0000";
	var width = c.width;
	var height = c.height;
	ctx.fillRect(0,0,width,height);
}

$(document).ready(function() {
	onResize();
	$(window).on('resize', onResize);
});
