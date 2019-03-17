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


	public function add($object)
    {
        
        $con=new mysqli("localhost","root","","software_engeeniring");
	
		$sql="INSERT INTO `user`(`Username`, `Password`, `Email`, `Firstname`, `Lastname`,
		 `Age`, `Typenum`, `isDeleted`) 
		VALUES ('".$object->Username."','".$object->Password."','".$object->Email."',
		'".$object->Firstname."','".$object->Lastname."','".$object->Age."','2','0')";

        mysqli_query($con,$sql);
        header('location: index.html');

    }   
         
    function delete($object)
    {
        $con=new mysqli("localhost","root","","software_engeeniring");

        $result=mysqli_query($con, "UPDATE `user` SET `isDeleted`='1' WHERE ID='".$object->ID."'");
        header('location: View_Users.php');
	}
	
    function update($object)
    {

        $con=new mysqli("localhost","root","","software_engeeniring");

        $sql="UPDATE `user` SET `Username`='".$object->Username."',
		`Password`='".$object->Password."',`Email`='".$object->Email."',
		`Firstname`='".$object->Firstname."',`Lastname`='".$object->Lastname."',
		`Age`='".$object->Age."' WHERE ID='".$object->ID."'";
		 mysqli_query($con,$sql);

         header('location: View_Users.php');
    }

   
}
?>