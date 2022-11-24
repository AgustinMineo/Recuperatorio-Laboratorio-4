<?php
namespace DAO;
use DAO\IBusinessDAO as IBusinessDAO;
use Models\Business as Business;

class BusinessDAO implements IBusinessDAO{

    private $businessList = array();
    
    public function addBusiness(Business $business){
        $this->RetrieveData();
        array_push($this->businessList,$business);
        $this->SaveData();
    }

    public function getAll(){
        $this->RetrieveData();
        return $this->businessList;
    }

    public function SaveData(){
        $arrayToEnconde = array();
        foreach($this->businessList as $business){
            $value["businessId"] = $business->getBusinessId();
            $value["category"] = $business->getCategory();
            $value["name"] = $business->getName();
            $value["email"] = $business->getEmail();
            $value["address"] = $business->getAddress();
            array_push($arrayToEnconde,$value);
        }

        $jsonContent = json_encode($arrayToEnconde, JSON_PRETTY_PRINT);
        file_put_contents("Data/businesses.json",$jsonContent);
    }

    private function RetrieveData()
        {
            $this->businessList = array();

            if(file_exists('Data/businesses.json'))
            {
                $jsonContent = file_get_contents('Data/businesses.json');

                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $value){
                    $business = new Business();
                    $business->setBusinessId($value["businessId"]);
                    $business->setCategory($value["category"]);
                    $business->setName($value["name"]);
                    $business->setEmail($value["email"]);
                    $business->setAddress($value["address"]);
                    array_push($this->businessList, $business);
                }
              
            }
        }

        public function GetLastId(){
            $this->RetrieveData();
            $lastID = 0;
            foreach($this->businessList as $business){
                $lastID = $business->getBusinessId();
            }
            return $lastID;
        }
      
}

?>