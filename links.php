<?php

$prev=date('Y-m-d', strtotime('-1 day', strtotime($date)));
$next=date('Y-m-d', strtotime('+1 day', strtotime($date)));
?>
<a href="/live">Live View</a><br>
<a href="?date=<?php echo $prev; ?>">Previous Day</a><br>
<a href="?date=<?php echo $next; ?>">Next Day</a><br>
<a href="/">Today</a><br>
