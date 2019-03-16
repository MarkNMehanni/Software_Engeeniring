
<?php
$receiver_Object = new receiver();
        $receiver_Object->Name = $_POST['Name'];
        $receiver_Object->Email = $_POST['Email'];
        $receiver_Object->Mobile = $_POST['Mobile'];
        $receiver_Object->Telephone = $_POST['Telephone'];
        $receiver_Object->Specialty = $_POST['Specialty'];
        $receiver_Object->AddressOfDoctor = $_POST['AddressOfDoctor']; 
        $receiver_Object->Place = $_POST['Place']; 
        $receiver_Object->Category_Of_Doctor = $_POST['Category_Of_Doctor']; 
        $receiver_Object->Working_Hours = $_POST['Working_Hours'];
        $receiver_Object->Working_Days = $_POST['Working_Days'];
        $receiver_Object->Payment_Method = $_POST['Payment_Method'];
        $receiver_Object->Insert($receiver_Object);
        echo $this->$Name;
        echo $this->$Email;
        echo $this->$Mobile;
        ?>