<!DOCTYPE html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<head>
<script src="masonry.pkgd.min.js"></script>
<script src="jquery-1.9.1.js"></script>
<link rel="stylesheet" href="style.css" />
<script>
var container = document.querySelector('#container');
var msnry = new Masonry( container, {
  // options
  columnWidth: 100,
  itemSelector: '.item',
});

// run when page loads
$(function() {

// run when an item class is clicked
$( "img" ).mouseover(function(event) {
	// set video variable to the alt text of the clicked item
	var video = event.target.alt;
	// set time variable to the title text of the clicked item
	var time = event.target.title;
	// replace the HTML with the video using those variables
	$( this ).replaceWith('<video loop preload="metadata" onclick="this.playbackRate=1.5" onmouseover="this.play();this.playbackRate=5;this.controls=true;" onmouseout="this.pause();this.controls=false;this.playbackRate=5" title="' + time + '"><source src="' + video + '" type="video/webm">');
});

});
</script>
</head>
<body>