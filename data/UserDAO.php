<?php
require_once 'DBConfig.php';
require_once '/entities/User.php';
class UserDAO{
    public function CreateUser($username,$password,$email){
        $sql = "insert into users (username, password,email)
        values ('".$username."','".$password."','".$email."')";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
        $dbh->exec($sql);
        $userid = $dbh->lastInsertId();
        $dbh = null;
        $user = User::create($username,$password,$email);
        print_r($user);
        return $user;
    }
    
    public function GetByUsername($username){
        $dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
        $sql="select id, username, password, email from users where username = '".$username."' ";
        $resultset=$dbh->query($sql);
        $rij = $resultset->fetch();
        $user = User::create($rij["id"],$rij["username"],$rij["password"],$rij["email"]);
        $dbh=null;
        return $user;
    }
    
    public function GetById($id){
        $dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
        $sql="select id, username, password, email from users where id = '".$id."' ";
        $resultset=$dbh->query($sql);
        $rij = $resultset->fetch();
        $used = User::create($rij["id"],$rij["username"],$rij["password"],$rij["email"]);
        $dbh=null;
        return $used;
    }
    
    public function UpdateUserInfo($id,$username,$password,$email){
        $dbh = new PDO(DBConfig::$DB_CONNSTRING,DBConfig::$DB_USERNAME,DBConfig::$DB_PASSWORD);
        $sql = "update users set username='" .$username. "', password='" .$password. "', email='".$email."' where id =".$id;
        $dbh->exec($sql);
        $dbh = null;
    }
    
}

