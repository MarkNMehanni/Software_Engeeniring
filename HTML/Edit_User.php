<!DOCTYPE html>
<html>
    <head>
        <title>Updating user</title>
    </head>

    <body>  
           
    <?php
    $id=$_GET['id'];
    $con = new mysqli("localhost", "root", "","software_engeeniring");
    $result=mysqli_query($con, "SELECT * FROM user WHERE ID=$id");

    while($res = mysqli_fetch_array($result))
    {
        $ID=$id;
        $Username = $res['Username'];
        $Password = $res['Password'];
        $Email = $res['Email'];
        $Firstname =$res['Firstname'];
        $Lastname = $res['Lastname'];
        $Age = $res['Age'];

    }

    ?>

<form action="updateUser.php" method="post">
    <fieldset>
        <legend> Adding New Doctor </legend>
        ID : <input type="text" name="ID" value="<?php echo $ID;?>" readonly> <br>
        Username : <input type="text" name="Username" placeholder="EX:Mek" value="<?php echo $Username;?>" required> <br> 
        Email : <input type="email" name="Email" placeholder="EX:user@live.com" value="<?php echo $Email;?>" required><br>
        Password: <input type="text" name="Password" placeholder="EX:01234567890" value="<?php echo $Password;?>" required><br>
        Firstname: <input type="text" name="Firstname" placeholder="EX: Aly" value="<?php echo $Firstname;?>" required><br>
        Lastname: <input type="text" name="Lastname" placeholder="EX: Mekawy" value="<?php echo $Lastname;?>" required> <br>
        Age : <input type="text" name="Age" placeholder="EX:21" value="<?php echo $Age;?>" required> <br>

        <input type="submit" name="submit" value="Add" > 
    </fieldset>
</form>
    </body>
</html>