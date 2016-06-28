<?php
include("../include/connect.php");

$email=mysql_real_escape_string($_REQUEST['email']);

$qry=mysql_query("insert into newsletters SET email='".$email."';") or die("Error in query: ".mysql_error());

echo "Great, you have been subscribed to our newsletter!";
?>