<?php
session_start();
require_once '/business/Userservice.php';
if(isset($_GET['logout']) && $_GET['logout']==true){
    session_destroy();
    header("location: home.php");
}
if(isset($_SESSION["aangemeld"])){
    $user=  unserialize($_SESSION["user"]);
}
include '/presentation/moviePage.php';
?>

