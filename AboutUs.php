<!DOCTYPE html>
<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "software_engeeniring";

        $con = mysqli_connect($servername, $username, $password, $dbname);

        $Selectquery = "SELECT * FROM html Where Link_ID = 1";

        $result = mysqli_query($con, $Selectquery);

        if(mysqli_num_rows($result) > 0) 
        // en
        {
            $row = mysqli_fetch_assoc($result);
            echo $row["html"];
            echo '<a href = "ckeditor.php?id='.$row['ID'].'">Edit</a>';
        }
        ?>
    </body>
</html>