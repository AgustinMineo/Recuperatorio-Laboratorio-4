<?php
namespace Helper;

use Models\User as User;

class SessionHelper{

    public static function StartSession(User $user){
        $_SESSION["loggedUser"] = $user;
    }

    public static function checkSession(){
        if(!isset($_SESSION["loggedUser"])){
            header("location: ".FRONT_ROOT."Home/Index");
        }
    }

}
?>