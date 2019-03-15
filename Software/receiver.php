<?php

class receiver {
    $id;
    $name;
    $email;
    $mobile;
    $telephone;
    $specialty;
    $address;
    $place;
    $category;
    $workinghours;
    $workingdays;
    $payment;

    function add($object){
        $servername="localhost";
        $serveruser="root";
        $password="";
        $databasename="software_engeeniring";
        $con=new mysqli($servername,$serveruser,$password,$databasename);

        $sql="INSERT INTO `receiver` (`ID`, `Name`, `Email`, `Mobile`, `Telephone`, `Specialty`, `Address`, `Place`, `Category`, `WorkingHours`, `WorkingDays`, `Payment`)
         VALUES (NULL, '$id', '$email', '$mobile', '$telephone', '$specialty', '$address', '$place', '$category', '$workinghours', '$workingdays', '$payment')";
            
        mysqli_query($con,$sql);
        
    }   
    
    function delete(){


    }

    function read(){


    }

    function update(){



    }
}