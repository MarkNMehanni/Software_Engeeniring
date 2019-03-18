<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software_engeeniring";

$con = mysqli_connect($servername, $username, $password, $dbname);

$id = $_GET['id'];

$Selectquery = "SELECT * FROM html WHERE ID = '$id'";

$result = mysqli_query($con, $Selectquery);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
    $content = $row['html'];
}
if(isset($_POST['submit']))
{
    // content 2 dh na ba_save feh elly 2t3mlul edit 
    $content2 = $_POST['editor'];
    $Update = "UPDATE html SET html = '$content2' Where ID = '$id'";
    mysqli_query($con, $Update);
    header("Location: AboutUs.php");
}
?>

<!DOCTYPE html>
<html>
    <body>
        <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script> 
        <form method = "Post">
            <!-- henna na bgeeb elhtml content zay ma tl3ly mn el db 3chn at2ked en hwa mch  fady abl ma a_edit 3leeehh  -->
            <textarea class = "ckeditor" name = "editor"><?php if(isset($content)) echo $content; ?></textarea>
            <br>
            <button  type = "Submit" name = "submit">Submit</button>
            <br><br>
        </form>
    </body>
</html>