<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/bosco.jpg">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
      
      <!--my added css file-->
       <link href="css/bosco.css" rel="stylesheet">
      
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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