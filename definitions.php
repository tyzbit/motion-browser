<?php
date_default_timezone_set("America/New_York");
if ( isset($_GET['date']) && preg_match('/[\d\-]+/', $_GET['date'])) {
	$date=$_GET['date'];
}
else {
	$date=date("Y-m-d");
}
define("prefix", "/media/Camera/$date/");

?>
