<?php
  
     $con=new mysqli("localhost","root","","software_engeeniring");
     $sql="SELECT * FROM 'html' ";
     mysqli_query($con,$sql);
     echo $sql;

?> 