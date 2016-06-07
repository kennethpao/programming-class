<?php
$link=mysql_connect('localhost','root','');

$dbname='programming_class';
$dbtest=mysql_select_db($dbname);

session_start();

$thisuser = false;

if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
    
  $username=mysql_real_escape_string($_SESSION['username']);
  $password=mysql_real_escape_string($_SESSION['password']);

  $qry=mysql_query("select * from users where username='$username' AND password='$password'");
  $rows = mysql_num_rows($qry);
  if ($rows == 1) {
      $thisuser = mysql_fetch_array($qry);
  }
}
?>