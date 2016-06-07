<?php
include("include/connect.php");
include("include/html/page_start.php");

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    session_destroy();
    echo "You have been logged out.";
}
else{echo "You already logged out.";
    }

include("include/html/page_stop.php");
?>