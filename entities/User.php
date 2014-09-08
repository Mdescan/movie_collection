<?php
class User{
    private static $idMap = array();
    private $id;
    private $username;
    private $password;
    private $email;
    
    private function __construct($id,$username,$password,$email) {
        $this->id=$id;
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
    }
    public static function create($id,$username,$password,$email){
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new User($id,$username, $password, $email);
        }
        return self::$idMap[$id];
    }

    public function getId(){
        return $this->id;
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setUsername($username){
        $this->username=$username;
    }
    
    public function setPassword($password){
        $this->password=$password;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
}

