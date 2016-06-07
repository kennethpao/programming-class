<?php
include("include/connect.php");
include("include/html/page_start.php");

$q="SELECT * FROM users ORDER BY user_id ASC";
$r= mysql_query($q);
echo "<h1>The following are registered members of Bosco Programming Class (".mysql_num_rows($r).")</h2>";
while ($membername=mysql_fetch_array($r)){
    echo "".$membername['fullname']."<br/>";
}

include("include/html/page_stop.php");
?>