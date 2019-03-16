<?php
 
// Create connection
$Connection = new mysqli("localhost", "root", "","software_engeeniring");
// Check connection
if ($Connection ->connect_error) {
    die("Connection failed: " . $Connection ->connect_error);
}

$sql = "INSERT INTO `receiver`(`Name`, `Email`, `Mobile`, `Telephone`, `Specialty`, `Address`, `Place`, `Category`, `WorkingHours`, `WorkingDays`, `Payment`)
 VALUES ('mehanni','khaltekk','6432','631319','hesart','45','mehanni','khaltekk','64312546132','631316451324789','hesart')";

if ($Connection ->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $Connection ->error;
}

$Connection->close();
?> 
