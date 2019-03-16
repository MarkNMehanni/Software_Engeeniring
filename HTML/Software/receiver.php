<?php

class receiver 
{
    public $ID;
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

    function update($object)
    {

        $con=new mysqli("localhost","root","","software_engeeniring");

        $sql="UPDATE `receiver` 
        SET `Name`='".$object->Name."',`Email`='".$object->Email."',`Mobile`='".$object->Mobile."',`Telephone`='".$object->Telephone."',
        `Specialty`='".$object->Specialty."',`Address`='".$object->Address."',`Place`='".$object->Place."',`Category`='".$object->Category."',
        `WorkingHours`='".$object->WorkingHours."', `WorkingDays`='".$object->WorkingDays."',`Payment`='".$object->Payment."'
         WHERE ID='".$object->ID."'";
         mysqli_query($con,$sql);
         header('location: ../view_doctor.php');
    }
}