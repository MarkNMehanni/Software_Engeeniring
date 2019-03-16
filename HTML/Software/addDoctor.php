
<?php
include("receiver.php");

    $receiver_Object = new receiver("");
    $receiver_Object->Name = $_POST['Name'];
    $receiver_Object->Email = $_POST['Email'];
    $receiver_Object->Mobile = $_POST['Mobile'];
    $receiver_Object->Telephone = $_POST['Telephone'];
    $receiver_Object->Specialty = $_POST['Specialty'];
    $receiver_Object->Address = $_POST['AddressOfDoctor']; 
    $receiver_Object->Place = $_POST['Place']; 
    $receiver_Object->Category = $_POST['Category_Of_Doctor']; 
    $receiver_Object->WorkingHours = $_POST['Working_Hours'];
    $receiver_Object->WorkingDays = $_POST['Working_Days'];
    $receiver_Object->Payment = $_POST['Payment_Method'];
    $receiver_Object->add($receiver_Object);
    echo $receiver_Object->Name;
?>