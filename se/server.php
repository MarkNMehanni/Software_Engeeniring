<?php
   session_start();

<<<<<<< HEAD
$con = mysqli_connect("localhost", "root", "","software_engeeniring");
=======
$con = mysqli_connect("localhost", "root", "","web-ex");
>>>>>>> parent of 7ffbf3f... Revert "SE"

if(isset($_POST['Login']))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql = "SELECT * from user where Username='$username' AND Password='$password'";
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_array($result))
    {
    $_SESSION['username'] = $username;
    $_SESSION['usertype'] = $row['Typenum'];
    }
    else{
        echo"mesh sha3'ala";
    }
    header('location: index.php');
}

if(isset($_POST['Signup']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
	$email=$_POST['email'];
	$fname= $_POST['firstname'];
	$lname=$_POST['lastname'];
    $age=$_POST['age'];
    
    mysqli_query($con,"INSERT INTO user ( `Username`, `Password`, `Email`, `Firstname`, `Lastname`, `Age`, `Typenum`)
     VALUES ('$username','$password','$email','$fname','$lname','$age', '2')");

     $_SESSION['username'] = $username;
     $_SESSION['usertype'] = "2";
<<<<<<< HEAD
    //  header('location: index.php');
=======
     header('location: index.php');
>>>>>>> parent of 7ffbf3f... Revert "SE"
}

if(isset($_POST['Logout']))
{
    session_unset();
    session_destroy();
    header('location: index.php');
}

?>