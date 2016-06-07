<?php
include("include/connect.php");
include("include/html/page_start.php");
?>
 <link href="css/bosco.css" rel="stylesheet">
<form action="email.php" id="message" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="Enter your name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" placeholder="Enter your Email"></td>
        </tr>
        <tr>
            <td>Message:</td>
            <td><textarea name="message" cols="50" rows="10" placeholder="message"></textarea></td>
        </tr>
         <tr>
            <td></td>
            <td><input type="submit" value="Send"></td>
        </tr>
    </table>
</form>

<?php
include("include/html/page_stop.php");
?>