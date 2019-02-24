<?php
<<<<<<< HEAD
$con = new mysqli("localhost", "root", "","software_engeeniring");
=======
$con = new mysqli("localhost", "root", "","web-ex");
>>>>>>> parent of 7ffbf3f... Revert "SE"

    
    $id=$_GET['id'];
    echo $id;	
	mysqli_query($con, "DELETE FROM `user` WHERE ID='$id'");

//header('location: index.php');
?>