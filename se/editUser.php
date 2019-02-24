<?php
$id=$_GET['id'];
<<<<<<< HEAD
$con = new mysqli("localhost", "root", "","software_engeeniring");
=======
$con = new mysqli("localhost", "root", "","web-ex");
>>>>>>> parent of 7ffbf3f... Revert "SE"
$result=mysqli_query($con, "SELECT * FROM user WHERE ID=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['Username'];
	$age = $res['Age'];
}

?>
<form action="applyedit.php" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $name;?>"></td>
		</tr>
		<tr>
			<td>Age</td>
			<td><input type="text" name="age" value="<?php echo $age;?>"></td>
		</tr>
		<tr>
			<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
