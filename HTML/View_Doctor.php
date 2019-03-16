<?php
$con = new mysqli("localhost", "root", "","software_engeeniring");
$sql="select * from receiver WHERE isDeleted = '0'";
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
		echo"<td>".$row['Name']."</td>";
        echo"<td>".$row['Email']."</td>";
        echo"<td>".$row['Mobile']."</td>";
        echo"<td>".$row['Telephone']."</td>";
        echo"<td>".$row['Specialty']."</td>";
        echo"<td>".$row['Address']."</td>";
        echo"<td>".$row['Place']."</td>";
        echo"<td>".$row['Category']."</td>";
        echo"<td>".$row['WorkingHours']."</td>";
        echo"<td>".$row['WorkingDays']."</td>";
        echo"<td>".$row['Payment']."</td>";
        echo "<td><a href=\"Edit_Doctor.php?id=$row[ID]\">Edit</a></td>";
        echo "<td><a href=\"Delete_Doctor.php?id=$row[ID]\">Delete</a></td>";
    }
    echo"</table>";
 }
?>