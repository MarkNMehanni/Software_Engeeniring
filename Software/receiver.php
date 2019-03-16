<!DOCTYPE html>
<html>
    <head>
        <title>Transferring Patients </title>
    </head>

    <body>  
           
        
        <form>
            <fieldset>
                <legend> Adding New Doctor </legend>
                Name : <input type="text" name="Name" placeholder="EX:Mehanni" required> <br> 
                Email : <input type="email" name="Email" placeholder="EX:doctor@live.com" required><br>
                Mobile : <input type="number" name="Mobile" placeholder="EX:01234567890" required><br>
                Telephone Of Clinic : <input type="number" name="Telephone" placeholder="EX:02-21452566" required><br>
                Specialty : <input type="text" name="Specialty" placeholder="EX: Heart , kindey , Suger" required> <br>
                Address Of Doctor : <input type="text" name="AddressOfDoctor" placeholder="EX:New , Used " required> <br>
                Place : <input type="text" name="Place" placeholder="EX: Clinic , Hospital  " required> <br>
                Category : <input type="text" name="Category_Of_Doctor" placeholder="EX: Kids, adults, ..." required> <br>
                Working Hours : <input type="text" name="Working_Hours" placeholder="EX: From :8:00 AM To 4:00 PM" required> <br>
                Working Days : <input type="text" name="Working_Days" placeholder="EX: Saturday,Monday,Tuesday,...." required> <br>
                Payment Method : <input type="text" name="Payment_Method" placeholder="EX: Free , ....EGP" required> <br>
                <input type="submit" name="submit" value="Add" > 
            </fieldset>
        </form>
    </body>
</html>
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
         VALUES ('$id', '$email', '$mobile', '$telephone', '$specialty', '$address', '$place', '$category', '$workinghours', '$workingdays', '$payment')";
            
        mysqli_query($con,$sql);
        
    }   
         $receiver_Object = new receiver();
        $receiver_Object->Name = $_POST['Name'];
        $receiver_Object->Email = $_POST['Email'];
        $receiver_Object->Mobile = $_POST['Mobile'];
        $receiver_Object->Telephone = $_POST['Telephone'];
        $receiver_Object->Insert($receiver_Object);
        echo $this->$Name;
        echo $this->$Email;
        echo $this->$Mobile;

    
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