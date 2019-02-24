<?php
<<<<<<< HEAD
$con = new mysqli("localhost", "root", "","software_engeeniring");
=======
$con = new mysqli("localhost", "root", "","web-ex");
>>>>>>> parent of 7ffbf3f... Revert "SE"
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$fname= $_POST['name'];
	$age=$_POST['age'];
	mysqli_query($con, "UPDATE
	user SET Username = '$fname', Age= '$age' where ID='$id'");
}
header('location: index.php');
?>