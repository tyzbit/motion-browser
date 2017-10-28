<?php

// include definitions, functions, header and links HTML
require_once 'definitions.php';
require_once 'functions.php';
require_once 'header.php';
require_once 'links.php';

// Start the Masonry Containter
?><div id="container"><?php

// Check if there are any files to display
if ($videos = getVideos()) {
	// iterate through each video that was found in the array returned by getVideos and shoot it into the page, formatted
	foreach ($videos as $id => $path) {
		// get the filename.webm instead of /path/to/filename.webm
		$video = basename($path);
		// get imagename, which will be the same name but .png
		$image = preg_replace('"\.mp4$"', '.mp4.thumb', $video);
		// get the modification time so we can have it display on mouseover of the video
		// $time = date ("H:i", filemtime($path));
		$time = preg_replace('/([0-9]{2})\-([0-9]{2})\-([0-9]{2}).mp4/', '${1}:${2}:${3}', $video)
		// insert the video and also some JS to make the video preload, have controls over mouseover, play fast and slow down if the video's clicked
?>
<div class="item">
<image src="camera/<?php echo $date.'/'.$image?>" width=100% title="<?php echo $time?>" alt="<?php echo $video?>">
</div>
<?php
	}
}

// no files were found, either there was a problem with the path or there really aren't any videos
else {
	echo "Nothing to see here, move along<br>";
}
?>
</div>
</body>
</html>
