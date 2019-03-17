<?php
$con = new mysqli("localhost", "root", "","software_engeeniring");
$sql="select * from user WHERE isDeleted = '0'";
$result = mysqli_query($con,$sql);	
if(mysqli_num_rows($result) > 0)
{
    echo"<table>
	<tr bgcolor='#CCCCCC'>
	<td>Name</td>
	<td>Age</td>
	<td>Edit</td>
	</tr>";
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr>";
		echo"<td>".$row['Username']."</td>";
        echo"<td>".$row['Password']."</td>";
        echo"<td>".$row['Email']."</td>";
        echo"<td>".$row['Firstname']."</td>";
        echo"<td>".$row['Lastname']."</td>";
        echo"<td>".$row['Age']."</td>";
        echo "<td><a href=\"Edit_User.php?id=$row[ID]\">Edit</a></td>";
        echo "<td><a href=\"Delete_User.php?id=$row[ID]\">Delete</a></td>";
    }
    echo"</table>";
 }
?>