<!DOCTYPE html>
<html>
    <head>
        <title>Transferring Patients </title>
    </head>

    <body>  
           
    <?php
    $id=$_GET['id'];
    $con = new mysqli("localhost", "root", "","software_engeeniring");
    $result=mysqli_query($con, "SELECT * FROM receiver WHERE ID=$id");

    while($res = mysqli_fetch_array($result))
    {

        $ID = $id;
        $Name = $res['Name'];
        $Email = $res['Email'];
        $Mobile = $res['Mobile'];
        $Telephone = $res['Telephone'];
        $Specialty = $res['Specialty'];
        $Address = $res['Address'];
        $Place = $res['Place'];
        $Category = $res['Category'];
        $WorkingHours = $res['WorkingHours'];
        $WorkingDays = $res['WorkingDays'];
        $Payment = $res['Payment'];
    }

    ?>

        <form action="Software/updateDoctor.php" method="post">
            <fieldset>
                <legend> Edit Doctor </legend>
                ID : <input type="text" name="ID" value="<?php echo $ID;?>" readonly> <br>
                Name : <input type="text" name="Name" placeholder="EX:Mehanni" value="<?php echo $Name; ?>" required> <br> 
                Email : <input type="email" name="Email" placeholder="EX:doctor@live.com" value="<?php echo $Email; ?>" required><br>
                Mobile : <input type="number" name="Mobile" placeholder="EX:01234567890" value="<?php echo $Mobile; ?>" required><br>
                Telephone Of Clinic : <input type="number" name="Telephone" placeholder="EX:02-21452566" value="<?php echo $Telephone; ?>" required><br>
                Specialty : <input type="text" name="Specialty" placeholder="EX: Heart , kindey , Suger" value="<?php echo $Specialty; ?>" required> <br>
                Address Of Doctor : <input type="text" name="Address" placeholder="EX:New , Used " value="<?php echo $Address; ?>" required> <br>
                Place : <input type="text" name="Place" placeholder="EX: Clinic , Hospital  " value="<?php echo $Place; ?>" required> <br>
                Category : <input type="text" name="Category" placeholder="EX: Kids, adults, ..." value="<?php echo $Category; ?>" required> <br>
                Working Hours : <input type="text" name="WorkingHours" placeholder="EX: From :8:00 AM To 4:00 PM" value="<?php echo $WorkingHours; ?>" required> <br>
                Working Days : <input type="text" name="WorkingDays" placeholder="EX: Saturday,Monday,Tuesday,...." value="<?php echo $WorkingDays; ?>" required> <br>
                Payment Method : <input type="text" name="Payment" placeholder="EX: Free , ....EGP" value="<?php echo $Payment; ?>" required> <br>
                <input type="submit" name="submit" value="Add" > 
            </fieldset>
        </form>
    </body>
</html>