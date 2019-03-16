<?php

class receiver 
{
    public $id;
    public $Name;
    public $Email;
    public $Mobile;
    public $Telephone;
    public $Specialty;
    public $Address;
    public $Place;
    public $Category;
    public $WorkingHours;
    public $WorkingDays;
    public $Payment;

    public function receiver(){
		
	}

    public function add($object)
    {
        
        $con=new mysqli("localhost","root","","software_engeeniring");

        $sql="INSERT INTO `receiver` (`Name`, `Email`, `Mobile`, `Telephone`, `Specialty`, `Address`, `Place`, `Category`, `WorkingHours`, `WorkingDays`, `Payment`)
         VALUES ('".$object->Name."','".$object->Email."', '".$object->Mobile."', '".$object->Telephone."', '".$object->Specialty."', '".$object->Address."', '".$object->Place."', '".$object->Category."', '".$object->WorkingHours."', '".$object->WorkingDays."', '".$object->Payment."')";
            
        mysqli_query($con,$sql);
        
    }   
         
    function delete()
    {


    }

    function read()
    {


    }

    function update()
    {



    }
}