<?php

// include functions
require_once 'definitions.php';
require_once 'functions.php';
require_once 'header.html';
require_once 'links.html';

// Check if there are any files to display
if ($videos = getVideos()) {
	foreach ($videos as $path) {
		$video = basename($path);
		$time = date ("H:i", filemtime($path));
		echo '<div class="item">';
		echo '<video loop preload="metadata" onclick="this.playbackRate=1.5" onmouseover="this.play();this.playbackRate=5;this.controls=true;" onmouseout="this.pause();this.controls=false;this.playbackRate=5" title=' . $time . '>';
		echo '<source src="' . $video . '" type="video/webm">';
		echo "</div>";
	}
}
else {
	echo "Nothing to see here, move along";
}
?>
</body>
</html>