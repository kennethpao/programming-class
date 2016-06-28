function validate(form){
    var fullName=form.fullname.value;
    var userName=form.username.value;
    var age=form.age.value;
    var email=form.email.value;
    var password1=form.password1.value;
    var password2=form.password2.value;
    
    var returnval = true;
    
    if(fullName==""){
        $('#01').html("please insert your fullname");
        returnval = false;
    }
    
    if(userName==""){
         $('#02').html("please insert your username");
        returnval = false;
    }
    
    if(email==""){
         $('#03').html("enter your email");
        returnval = false;
    }
    
    if(age==""){
         $('#04').html("are you to old to insert an age?");
        returnval = false;  
    }
    
    if(password1==""){
         $('#05').html("select password");
        returnval = false;
    }
    
    if(password1!=password2){
         $('#06').html("your passwords didnot match");
        returnval = false;
    }
    
   return returnval;
}

function account_type_changed() {
	var account_type = $('#account_type').val();
	
	if (account_type == "user") {
		$('#account_type_tutor').hide('fast');
	}
	else {
		$('#account_type_tutor').show('fast');
	}
}

function newsletter_signup() {
	var email = $('#newsletter_email').val();
	$.get("/ajax/newsletter_signup.php?email="+encodeURIComponent(email), function(result) {
		alert(result);
	});
}