<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/bosco.jpg">

    <title>Home</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    
    <link href="css/bosco.css" rel="stylesheet">
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>

  <body onload="document.frmsignup.btnsubmit.disabled=true">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <ul class="nav navbar-nav">
              <li class="active"> <a class="navbar-brand" href="index.php">Home</a></li>
              <?php
              if($thisuser){
                echo '<li> <a class="navbar-brand" href="profile.php">Profile</a></li>';
              }
              ?>
              <li> <a class="navbar-brand" href="projects.php">Projects</a></li>
              <li> <a class="navbar-brand" href="contact_us.php">Contact Us</a></li>
              <li><a class="navbar-brand" href="members.php">Members</a></li>
              <li><a class="navbar-brand" href="elibrary.php">e-library</a></li>'
		  </ul>
            <?php
            if (!$thisuser) {
                include("include/html/page_login.php");
            }
            ?>
        </div>
           <a class="navbar-form navbar-right" href="#"><?php if ($thisuser) echo $thisuser['fullname']; ?></a>
          <a class="navbar-form navbar-right" href="logout.php"><?php if ($thisuser) echo "logout"; ?></a>
      </div>
    </nav>
      
    <div class="container">
      <hr>