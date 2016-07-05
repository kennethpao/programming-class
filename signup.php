<?php
include("include/connect.php");
include("include/html/page_start.php");
?>

<script src="scripts/form.js"></script>

<form name="frmsignup" method="post" action="forms.php"class="frmsignup" onsubmit="return validate(this);">
     <input type="hidden" name="action" value="signup"/>
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
			<div class="col-sm-2 col-sm-push-3">About:</div>
            <div class="col-sm-4 col-sm-push-3"><textarea rows="10" class="form-control" placeholder="write briefly about your computer knowledge" type="text" name="abouttext"></textarea><br/></div>
		</div>
		<!--<div class="row">
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
		</div>-->
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