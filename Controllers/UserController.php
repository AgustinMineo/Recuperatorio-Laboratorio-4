<?php
    namespace Controllers;

    use Helper\SessionHelper as SessionHelper;
    use DAO\UserDAO as UserDAO;
    use Helper\SessionHelper as Helper;

    class UserController{
        private $user;
        private $UserDAO;

        public function __construct(){
            $this->UserDAO = new UserDAO();
        }

        public function goIndex(){
            require_once(VIEWS_PATH."business-add.php");
        }

        public function Login($email,$password){
            $user = $this->UserDAO->getUserToLogin($email, $password);
                    if($user){
                        SessionHelper::StartSession($user);
                        header("location: ".FRONT_ROOT. "Home/Add");
                    } else{
                        header("location: ".FRONT_ROOT. "Home/Index");
                    }
        }
    }
?>