<?php
session_start();
require_once '/business/Userservice.php';
if(isset($_GET['submited']) && $_GET['submited']==true ){
    if($_POST["username"] == "" || $_POST["password"] == "" || $_POST["repassword"] == "" || $_POST["email"] == ""){
        header("location: register.php?error=invullen");
    }else{
        $username=$_POST["username"];
        $password=$_POST["password"];
        $repassword=$_POST["repassword"];
        $email=$_POST["email"];
    }
    if($password==$repassword){
        $user=new UserService();
        $user->AddUser($username, $password, $email);
        header("location: register.php?error=fine");
    }else{
        header("location: register.php?error=pass");
    }
}else{
   include '/presentation/registerPage.php'; 
}
?>