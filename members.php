<?php
include("include/connect.php");
include("include/html/page_start.php");
?>

<div class="container">
    
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">

<?php
$q="SELECT * FROM users ORDER BY user_id ASC";
$r= mysql_query($q);
echo "<h2>The following are registered members of Bosco Programming Class (".mysql_num_rows($r).")</h2>";
while ($membername=mysql_fetch_array($r)){
    echo "<a href=''>".$membername['fullname']."</a><br/>";
}
?>
                <hr>
                <a href="signup.php">Join</a>
            </div>
        </div>
    </div>
    
</div>


<?php
include("include/html/page_stop.php");
?>