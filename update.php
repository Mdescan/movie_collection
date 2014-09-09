<?php
session_start();
require_once '/business/Userservice.php';
//logout action
if(isset($_GET['logout']) && $_GET['logout']==true){
    session_destroy();
    header("location: home.php");
}
//check to see if loged in
if(isset($_SESSION["aangemeld"])){
    $user=  unserialize($_SESSION["user"]);
}else{
    //lead unauthorized users away
    header("location: home.php");
}
if(isset($_GET["userid"]) && $_GET["userid"] == $user->getId()){
    $UppdateId=$_GET["userid"];
    
    if(isset($_GET["submited"]) && $_GET["submited"]){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        
        $UpdateUser = new UserService();
        $UpdateUser->UpdateMyinfo($UppdateId,$username, $password, $email);
    }
    $userus = new UserService();
    $user = $userus->HaalUserOp($UppdateId);
    //to change the info in the user sesion variable
    $_SESSION["user"]=  serialize($user);
    $user=  unserialize($_SESSION["user"]);
}else{
    
}
/*echo $_GET["userid"];
echo $_GET["submited"];*/
include '/presentation/updatePage.php';
?>