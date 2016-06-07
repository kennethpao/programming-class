<?php
include("include/connect.php");
include("include/html/page_start.php");

if ($thisuser) {
    echo "Hi ".$thisuser['fullname']."<br/>";
}
else {
    echo "You must be logged in to view this page.";
}
include("include/html/page_stop.php");
?>