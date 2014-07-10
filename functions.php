<?php

function getVideos() {
	if ($files = glob(prefix . "*.webm")) {
	return $files;
	}
	else {
	return false;
	}
}

?>