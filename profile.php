<?php
include("include/connect.php");
include("include/html/page_start.php");

?>
<div class="row">
    <div class='col-lg-12 col-sm-12 text-center'>
        <h3>
            Fullname: <?php echo $thisuser['fullname']; ?><br><br>
            Username: <?php echo $thisuser['username']; ?><br><br>
            AGE:  <?php echo $thisuser['age']; ?><br><br>
            Email:  <?php echo $thisuser['email']; ?><br>
        </h3>
        <h4><strong><a href="editprofile.php">Edit profile</a></strong></h4>
    </div>
</div>

<?php
include("include/html/page_stop.php");
?>