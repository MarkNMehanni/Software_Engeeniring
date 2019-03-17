<?php

	
class user{
	public $ID;
	public $Username;
	public $Password;
	public $Email;
    public $Firstname;
    public $Lastname;
    public $Age;
	public $Typenum;
	
	
	
	public function user(){
		
	}
	
	public function add($object){
	$servername="localhost";
	$serveruser="root";
	$password="";
	$databasename="software_engeeniring";
	$con=new mysqli($servername,$serveruser,$password,$databasename);
	
	$sql="INSERT INTO `user`(`Username`, `Password`, `Email`, `Firstname`,'Lastname','Age', `Typenum`)
	VALUES ('".$object->Username."','".$object->Password."','".$object->Email."','".$object->Firstname."','".$object->Lastname."','".$object->Age."','".$object->Typenum."','2')";
		
	mysqli_query($con,$sql);
	
}

	public function login($user,$pass){
	$servername="localhost";
	$serveruser="root";
	$password="";
	$databasename="software_engeeniring";
	$con=new mysqli($servername,$serveruser,$password,$databasename);

    $sql = "SELECT * from user where Username='$user' AND Password='$pass'";    
    $result = mysqli_query($con,$sql);
    if($row = mysqli_fetch_array($result))
              {
                  //log user in
                  header('location: index.html'); //redirect to page
              } 
              else
              {
                      header('location: login.php');               
              }
	}
}
?>