<?php
$con = new mysqli("localhost", "root", "","web-ex");

    
    $id=$_GET['id'];
    echo $id;	
	mysqli_query($con, "DELETE FROM `user` WHERE ID='$id'");

//header('location: index.php');
?>