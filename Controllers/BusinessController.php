<?php
namespace Controllers;
use Models\Business as Business;
use DAO\BusinessDAO as BusinessDAO;


class BusinessController{
    private $BusinessDAO;

    public function __construct(){
        $this->BusinessDAO = new BusinessDAO();
    }

    public function goIndex(){
        header("location: ".FRONT_ROOT."Home/Add");
    }


    public function Add($category,$name,$email,$adress){
        $business = new Business();
        $business->setBusinessId($this->BusinessDAO->GetLastID()+1);
        $business->setCategory($category);
        $business->setName($name);
        $business->setEmail($email);
        $business->setAddress($adress);
        $this->BusinessDAO->addBusiness($business);

        $this->goIndex();
    }
}
?>