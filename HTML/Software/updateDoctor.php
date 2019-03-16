<?php
include("receiver.php");

$receiver_Object = new receiver("");
$receiver_Object->ID = $_POST['ID'];
$receiver_Object->Name = $_POST['Name'];
$receiver_Object->Email = $_POST['Email'];
$receiver_Object->Mobile = $_POST['Mobile'];
$receiver_Object->Telephone = $_POST['Telephone'];
$receiver_Object->Specialty = $_POST['Specialty'];
$receiver_Object->Address = $_POST['Address']; 
$receiver_Object->Place = $_POST['Place']; 
$receiver_Object->Category = $_POST['Category']; 
$receiver_Object->WorkingHours = $_POST['WorkingHours'];
$receiver_Object->WorkingDays = $_POST['WorkingDays'];
$receiver_Object->Payment = $_POST['Payment'];
$receiver_Object->update($receiver_Object);
?>