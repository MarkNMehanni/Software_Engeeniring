<?php
include('user.php');
$receiver_object = new user("");

    $receiver_object->ID=$_GET['id'];
    $receiver_object->delete($receiver_object);

    
    ?>