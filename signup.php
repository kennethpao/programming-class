<?php
include("include/connect.php");

$error_message="";

if(isset($_POST['fullname'],$_POST['username'],$_POST['age'],$_POST['email'],$_POST['password1'],$_POST['password2'])){
    $fullName=mysql_real_escape_string($_POST['fullname']);
    $userName=mysql_real_escape_string($_POST['username']);
    $age=mysql_real_escape_string($_POST['age']);
    $email=mysql_real_escape_string($_POST['email']);
    $password=mysql_real_escape_string($_POST['password1']);
    
    function insertUser($fullName,$userName,$age,$password,$email){
        $statement="insert into users SET fullname='".$fullName."', username='".$userName."', age='".$age."', email='".$email."',
        password='".$password."', account_type='".$account_type."';";
        $result=mysql_query($statement) or die("Error in query: ".$statement.", ".mysql_error());
        $_SESSION['login_user']=$username; 
        header("location:index.php"); 
    
    }
    
       insertuser($fullName,$userName,$age,$password,$email);
    
    
}
include("include/html/page_start.php");
?>
	<div class="container">
		<div class="row">
       <div class="col-md-12" align="center">
			<form name="frmsignup" method="post" action="signup.php"class="frmsignup" onsubmit="return validate(this);">
                <script src="scripts/form.js"></script>
                <div class="form-group">
				<table>
                    <tr>
                        <td>Account type:</td>
                        <td>
                            <select name="account_type" onchange="account_type_changed" readonly="readonly">
                                <option value="Tutor">Tutor</option>
                                <option value="user">User</option>
                                    
                            </select>
                        </td>
                    </tr>
					<tr>
                        <td><label for="fullname">Full Name:</label></td>
                        <td><input class="frm" type="text" name="fullname"><span id="01"></span><br/></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input class="frm" type="text" name="username"><span id="02"></span><br/></td>
					</tr>
                     <!--<div id="account_type_tutor">
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
                   </div> -->
					<tr>
						<td>Age:</td>
						<td><input class="frm" type="text" name="age"><span id="03"></span><br/></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input class="frm" type="email" name="email"><span id="04"></span><br/></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input class="frm" type="password" name="password1"><span id="05"></span><br/></td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input class="frm" type="password" name="password2"><span id="06"></span><br/></td>
					</tr>
                    <tr>
                        <td></td>
                        <td><input class="frm" type="checkbox" name="agree" value="conditions"  onclick="document.frmsignup.btnsubmit.disabled=true"> I agree with the <a href="#">terms and conditions</a></td>
                    </tr>
					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-success" name="btn_submit" value="signup"></td>
					</tr>
                    <tr>
                        <td></td>
                        <td>Already a member? <a href="index.php">Login</a></td>
                    </tr>
				</table>
                </div>
			</form>
          
				
       </div>
<?php
include("include/html/page_stop.php");
?>