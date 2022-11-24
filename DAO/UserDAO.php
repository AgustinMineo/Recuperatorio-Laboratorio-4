<?php
namespace DAO;
use DAO\IUserDAO as IUserDAO;
use Models\User as User;

class UserDAO implements IUserDAO
    {
        private $userList = array();

        public function getAll(){
            $this->RetrieveData();
            return $this->userList;
        }

        public function getUserToLogin($email,$password){
            $this->RetrieveData();
            foreach($this->userList as $user){
                if(strcmp($user->getEmail(),$email)==0 && strcmp($user->getPassword(), $password)==0){
                    return $user;
                }
            }
        }    
     
        private function RetrieveData()
        {
            $this->userList = array();

            if(file_exists('Data/users.json'))
            {
                $jsonContent = file_get_contents('Data/users.json');

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $value){
                    $user = new User();
                    $user->setUserID($value["userdId"]);
                    $user->setEmail($value["email"]);
                    $user->setPassword($value["password"]);
                    array_push($this->userList, $user);
                }
              
            }
        }
    }
?>