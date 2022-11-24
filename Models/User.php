<?php
namespace Models;



class User {
    private $userId;
    private $email;
    private $password;

    public function getUserID(){
        return $this->userId;
    }
    public function setUserID($userID){
        $this->userId = $userID;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }


}


?>