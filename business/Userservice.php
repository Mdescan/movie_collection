<?php
require_once '/data/UserDAO.php';;
class UserService{
    public function AddUser($username,$password,$email){
        $userdb = new UserDAO();
        $userdb->CreateUser($username, $password, $email);
    }
    public function LoginCheck($username){
        $use = new userDAO($username);
        $users = $use->GetByUsername($username);
        return $users;
    }
    public function  HaalUserOp($id){
        $use = new UserDAO();
        $user = $use->GetById($id);
        return $user;
    }

    public function UpdateMyinfo($id,$username,$password,$email){
        $use = new UserDAO();
        $use->UpdateUserInfo($id, $username, $password, $email);        
    }
}