<?php
include("include/connect.php");
include("include/html/page_start.php");

$error_message="";

if(isset($_POST['myimage'],$_POST['study'],$_POST['college'],$_POST['experiance'],$_POST['projects'])){
    $myimage=mysql_real_escape_string($_POST['myimage']);
    $study=mysql_real_escape_string($_POST['study']);
    $college=mysql_real_escape_string($_POST['college']);
    $experiance=mysql_real_escape_string($_POST['experiance']);
    $projects=mysql_real_escape_string($_POST['projects']);
    
    }

?>

<form name="tutorfrm" method="post" action="tutorform.php">
    <table>
        <div id="account_type_user">
            <tr>
                <td>photo:</td>
                <td><input type="file" name="myimage"></td>
            </tr>
            <tr>
                <td>Studied:</td>
                <td><input name="study" type="text">At:<input name="college" type="text"></td>
            </tr>
            <tr>
                <td>Years of Experiance:</td>
                <td><input name="experiance" size="2" type="text"></td>
            </tr>
            <tr>
                <td>Projects worked on:</td>
                <td><textarea name="projects" col="5" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Have you been a tutor before?</td>
                <td><input type="radio" name="teacher" value="yes">yes <input type="radio" name="teacher" value="No">NO</td>
            </tr>
        </div>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>

<?php
include("include/html/page_stop.php");
?>