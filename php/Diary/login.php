<?php
/**
 * Created by PhpStorm.
 * User: hze
 * Date: 11/20/15
 * Time: 2:46 PM
 */
session_start();

include("connection.php");

if($_POST['submit']=="Sign up"){

    //Validate email address.
    if(!$_POST['email']){
        $error .= "<br />Please enter your email.";
    }else if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $error .= "<br />Please enter validate email.";
    }

    //Validate password, change password to md5 code.and save it in database.
    if(!$_POST['password']){
        $error .= "<br />Please enter your password";
    }else if(strlen($_POST['password'])<8 && !preg_match('`[A-Z]`',$_POST['password'])){
        $error .= "<br/>Your password is invalid.";
    }

    if($error){
        $error ='You have mistakes with your enter:'.$error;

    }else{
        $checkexistquery = "SELECT * FROM user WHERE email='".$_POST['email']."'";
        $checkesistresult = mysqli_query($link,$checkexistquery);
        $checkexistrows = mysqli_num_rows($checkesistresult);

        if($checkexistrows){
           $error = "this email has registered, Do you want to Log in?";
        }else{
            //$addnewuserquery = "INSERT INTO 'user' ('email','password') VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
            //$addnewuserquery = "INSERT INTO 'user' ('email','password') VALUES ('".$_POST['email']."','".$_POST['password']."')";
            $addnewuserquery = "INSERT INTO `user`(`email`, `password`) VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
            mysqli_query($link,$addnewuserquery);

            $_SESSION['id']= mysqli_insert_id($link);

        }
    }
}

if ($_POST['submit']=="Log in") {
    # code...
    $loginquery= "SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."'";
    $loginresult = mysqli_query($link,$loginquery);
    $rows = mysqli_fetch_array($loginresult);

    if($rows){
        $_SESSION['id']=$rows['id'];
        //Redirect to logged in page
    }else{
        $error = "We could not find a user with that email and password!";
    }

}


?>
