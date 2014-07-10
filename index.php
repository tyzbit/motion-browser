<?php

// include definitions, functions, header and links HTML
require_once 'definitions.php';
require_once 'functions.php';
require_once 'header.html';
require_once 'links.html';

// Check if there are any files to display
if ($videos = getVideos()) {
	// iterate through each video that was found in the array returned by getVideos and shoot it into the page, formatted
	foreach ($videos as $path) {
		// get the filename.webm instead of /path/to/filename.webm
		$video = basename($path);
		// get the modification time so we can have it display on mouseover of the video
		$time = date ("H:i", filemtime($path));
		// begin the <div> for this video
		echo '<div class="item">';
		// insert the video and also some JS to make the video preload, have controls over mouseover, play fast and slow down if the video's clicked
		echo '<video loop preload="metadata" onclick="this.playbackRate=1.5" onmouseover="this.play();this.playbackRate=5;this.controls=true;" onmouseout="this.pause();this.controls=false;this.playbackRate=5" title=' . $time . '>';
		echo '<source src="' . $video . '" type="video/webm">';
		// end the <div>
		echo "</div>";
	}
}

// no files were found, either there was a problem with the path or there really aren't any videos
else {
	echo "Nothing to see here, move along";
}
?>
</body>
</html>