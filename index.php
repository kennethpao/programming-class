<?php
include("include/connect.php");
include("include/html/page_start.php");
?>


    <div class="jumbotron">
      <div class="container">
		<img src="images/bosco.jpg">
        <h1 class="welcome">Welcome to Bosco Programing Club</h1>
        <p class="slogan">Less talk, More code</p>
        
      </div>
    </div>

     <div class="row" id="tab-group">
         <div class="box">
             <div class="col-lg-12">
                 <h2 class="intro-text text-center"> <strong>About us</strong></h2>
                 <hr class="visible-xs">
                <p>Bosco Programing Class is a Gulu based web programming class carried out both online and offline.We offer uganda's best free programming lectures not to only enhance youth with computer literacy but also make more job creaters than seekers in the ICT field. Our lessons are carried out twice every week from 10:00am-1:00pm at TAKS CENTER along churchil high road in senior quarters gulu.For more details you can <a href="contact_us.php">contact us</a> or <a href="signup.php">signup</a> for more details</p>
             </div>
         </div>
    </div>
      <hr>


<form action="" method="post" onsubmit="newsletter_signup(); return false;">
    <strong>signup for a newsletter</strong>
    <div class="row">
        <div class="col-sm-6"><input class="form-control" id="newsletter_email" type="email" name="email" placeholder="Email"></div>
    </div>
    <div class="row">
        <div class="col-sm-6"><input type="submit" class="btn btn-success" value="signup"></div>
    </div>
</form>
      
<?php
include("include/html/page_stop.php");
?>