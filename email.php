<?php
$myemail="oromakenneth99@gmail.com";
$subject="message from Bosco programming class";

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$header="from:$name <$email>";

mail($myemail,$subject,$message,$header);

echo"thanks";
?>