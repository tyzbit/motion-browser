<?php
// why did I split this off into another file when it's just one function?
// 
// a feeble attempt at good programming.

function getVideos() {
	// get a list of files that match *.webm in the directory
	if ($files = glob(prefix . "*.webm")) {
	// return the array if any are found
	return $files;
	}
	else {
	// if not, return false
	return false;
	}
}

?>