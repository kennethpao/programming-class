<?php
$fullName=$_POST['fullname'];
$userName=$_POST['username'];
$age=$_POST['age'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password1'];

function validatefullname(fullName){
    if($fullname=""){
        return "your fullname is empty";
        return "";
    }
}

function validateusername($username){
    if($username=""){
        return "select a username";
        return "";
    }
}

function validateage($age){
    if($age=""){
        return "please insert your age";
        return "";
    }
}

function validateemail($email){
    if($email=""){
        return "please insert your email";
        return "";
    }
}

function validatepassword($password1){
    if($password1=""){
        return "please select a password";
        return "";
    }
}
?>