<?php
    namespace Controllers;
    use DAO\BusinessDAO as BusinessDAO;
    use Helper\SessionHelper as SessionHelper;

    class HomeController
    {
        private $BusinessDAO;

        public function __construct(){
            $this->BusinessDAO = new BusinessDAO();
        }
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."index.php");
        } 
        
        public function Add($message = "")
        {
            SessionHelper::checkSession();
            require_once(VIEWS_PATH."business-add.php");
        } 

        public function Logout()
        {
            require_once(VIEWS_PATH."logout.php");
        } 
        
        public function List($message = "")
        {
            SessionHelper::checkSession();
            $businessList = $this->BusinessDAO->getAll();
            require_once(VIEWS_PATH."business-list.php");
        }  
    }
?>