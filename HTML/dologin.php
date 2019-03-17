<?php
include("user.php");

$user=$_POST['Username'];
$pass=$_POST['Password'];

$myobject=new user("");
$myobject->login($user,$pass);

?>