<?php

if ( isset($_GET['date']) && preg_match('/\d+/', $_GET['date'])) {
        $date=$_GET['date'];
}
else {
        $date=date("Ymd");
}

// this is the path to the directory that contains all of the video files
define("prefix", "/media/Camera/$date/");
?>