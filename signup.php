<?php
include("include/connect.php");

$error_message="";

if(isset($_POST['fullname'],$_POST['username'],$_POST['age'],$_POST['email'],$_POST['password1'],$_POST['password2'],$_POST['college'],$_POST['account_type'])){
	$fullName=mysql_real_escape_string($_POST['fullname']);
	$userName=mysql_real_escape_string($_POST['username']);
	$age=mysql_real_escape_string($_POST['age']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=md5($_POST['$password1']);
    $account_type = $_POST['account_type'];
    $college=mysql_real_escape_string($_POST['college']);
    
	function insertUser($fullName,$userName,$age,$password,$email){
		$statement="insert into users SET fullname='".$fullName."', username='".$userName."', age='".$age."', email='".$email."', password='".$password."', account_type='".$account_type."', college='".$college."'";
		$result=mysql_query($statement) or die("Error in query: ".$statement.", ".mysql_error());
		$_SESSION['login_user']=$username; 
		header("location:index.php"); 
	
	}
	
    insertuser($fullName,$userName,$age,$password,$email);
    $profile=mysql_query("insert into userprofile SET username='".$userName."'");
	
	
}
include("include/html/page_start.php");
?>

<script src="scripts/form.js"></script>

<form name="frmsignup" method="post" action="signup.php"class="frmsignup" onsubmit="return validate(this);">
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static">Account type:</div>
		<div class="col-sm-4 col-sm-push-3">
			<select class="form-control" id="account_type" name="account_type" onchange="account_type_changed();">
				<option value="user">User</option>
				<option value="tutor">Tutor</option>
			</select><span><br/></span>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static"><label for="fullname">Full Name:</label></div>
		<div class="col-sm-4 col-sm-push-3">
			<input class="form-control" type="text" name="fullname"><span id="01"></span>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static">Username:</div>
		<div class="col-sm-4 col-sm-push-3"><input class="form-control" type="text" name="username"><span id="02"></span><br/></div>
	</div>
	<div style="display: none" id="account_type_tutor">
		<div class="row">
			<div class="col-sm-2 col-sm-push-3">photo:</div>
			<div class="col-sm-4 col-sm-push-3"><input class="form-control" type="file" name="myimage"><br/></div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-sm-push-3">Studied:</div>
			<div class="col-sm-4 col-sm-push-3"><input class="form-control" name="study" type="text"><br/></div>
		</div>
        <div class="row">
			<div class="col-sm-2 col-sm-push-3">At</div>
			<div class="col-sm-4 col-sm-push-3"><input class="form-control" name="college" type="text"><br/></div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-sm-push-3">Years of Experiance:</div>
			<div class="col-sm-4 col-sm-push-3"><input class="form-control" name="experiance" size="2" type="text"><br/></div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-sm-push-3">Projects worked on:</div>
			<div class="col-sm-4 col-sm-push-3"><textarea class="form-control" name="projects" col="5" rows="5"></textarea><br/></div>
		</div>
		<div class="row">
			<div class="col-sm-2 col-sm-push-3">Have you been a tutor before?</div>
			<div class="col-sm-4 col-sm-push-3"><input type="radio" name="teacher" value="yes">yes <input type="radio" name="teacher" value="No">NO<br/></div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static">Age:</div>
		<div class="col-sm-4 col-sm-push-3"><input class="form-control" type="text" name="age"><span id="03"></span><br/></div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static">Email:</div>
		<div class="col-sm-4 col-sm-push-3"><input class="form-control" type="email" name="email"><span id="04"></span><br/></div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static">Password:</div>
		<div class="col-sm-4 col-sm-push-3"><input class="form-control" type="password" name="password1"><span id="05"></span><br/></div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static">Confirm Password:</div>
		<div class="col-sm-4 col-sm-push-3"><input class="form-control" type="password" name="password2"><span id="06"></span><br/></div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static"><input class="form-control" type="checkbox" name="agree" value="conditions" required></div>
		<div class="col-sm-4 col-sm-push-3"> I agree with the <a href="#">terms and conditions</a></div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static"></div>
		<div class="col-sm-4 col-sm-push-3"><input type="submit" class="btn btn-success" name="btn_submit" value="signup"></div>
	</div>
	<div class="row">
		<div class="col-sm-2 col-sm-push-3 form-control-static"></div>
		<div class="col-sm-4 col-sm-push-3">Already a member? <a href="index.php">Login</a></div>
	</div>
</form>
<?php
include("include/html/page_stop.php");
?>