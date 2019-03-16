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

    public function add($object)
    {
        
        $con=new mysqli("localhost","root","","software_engeeniring");

        $sql="INSERT INTO `receiver` (`ID`, `Name`, `Email`, `Mobile`, `Telephone`, `Specialty`, `Address`, `Place`, `Category`, `WorkingHours`, `WorkingDays`, `Payment`)
         VALUES ('$object->id', '$object->email', '$object->mobile', '$object->telephone', '$object->specialty', '$object->address', '$object->place', '$object->category', '$object->workinghours', '$object->workingdays', '$object->payment')";
            
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