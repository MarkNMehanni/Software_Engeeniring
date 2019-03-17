<?php
include("user.php");
   
$user_Object = new user("");
$user_Object->Username = $_POST['Username'];
$user_Object->Password = $_POST['Password'];
$user_Object->Email = $_POST['Email'];
$user_Object->Firstname = $_POST['Firstname'];
$user_Object->Lastname = $_POST['Lastname'];
$user_Object->Age = $_POST['Age']; 
$user_Object->add($user_Object);
?>