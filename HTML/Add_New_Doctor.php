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

$haga = new New_Doctor();
$haga->$_POST['Name'];
$haga->Insert($haga);

class New_Doctor 
{

    var $Name = $_POST['Name'];
    Var $Email = $_POST['Email'];
    Var $Mobile= $_POST['Mobile'];
    var $Telephone= $_POST['Telephone'];
    var $Specialty= $_POST['Specialty'];
    var $Address= $_POST['AddressOfDoctor'];
    var $Place= $_POST['Place'];
    var $Category= $_POST['Category_Of_Doctor'];
    var $WorkingHours= $_POST['Working_Hours'];
    var $WorkingDays= $_POST['Working_Days'];
    var $Payment= $_POST['Payment_Method'];



public function Insert()
{
    $sql = "INSERT INTO `receiver`(`Name`, `Email`, `Mobile`, `Telephone`, `Specialty`, `Address`, `Place`, `Category`, `WorkingHours`, `WorkingDays`, `Payment`)
 VALUES ($Name,'khaltekk','6432','631319','hesart','45','mehanni','khaltekk','64312546132','631316451324789','hesart')";


    $result = $this->Connect()->query($sql);//connect is the function of connection of database which return database connection 

    if ($result->rowCount() > 0)
    {
        while ($row = $result->fetch())
        {
            $data[]= $row;
        }
        return $data;
    }
}
}
$New_Doctor = new New_Doctor();
echo $_POST['name'];
 
?>