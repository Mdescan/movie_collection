<?php
session_start();
require_once '/business/movieservice.php';
if(isset($_GET['logout']) && $_GET['logout']==true){
    session_destroy();
    header("location: home.php");
}
if(isset($_SESSION["aangemeld"])){
    $user=  unserialize($_SESSION["user"]);
}
$movies= new MovieService();
$list=$movies->ShowAllMovies();
include '/presentation/moviePage.php';
?>