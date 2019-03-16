<?php
include('Software/receiver.php');
$receiver_object = new receiver("");

    $receiver_object->ID=$_GET['id'];
    $receiver_object->delete($receiver_object);

    
    ?>