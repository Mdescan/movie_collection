<?php
session_start();
require_once '/business/Userservice.php';
if(isset($_GET['submited']) && $_GET['submited']==true){
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    $userSvc = new UserService();
    $user = $userSvc->LoginCheck($username);
    
    /*echo '<br/>';
    echo 'username post : ',$username,' . userobject geeft : ',$user->getUsername();
    echo '<br/>';
    echo 'username post : ',$password,' . userobject geeft : ',$user->getPassword();
    echo '<br/>';*/
    
    if ($username == $user->getUsername()&& $password == $user->getPassword()){
        $_SESSION["aangemeld"]=true;
        $_SESSION["user"]=  serialize($user);
    }else{
        echo 'wrong combination';
    }
    
}
if(isset($_GET['logout']) && $_GET['logout']==true){
    session_destroy();
    header("location: home.php");
}
if(isset($_SESSION["aangemeld"])){
    $user=  unserialize($_SESSION["user"]);
}
include '/presentation/HomePage.php';
?>