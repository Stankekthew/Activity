<?php

include "DB.php"; 

$db = new DB();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $Id_No = $_POST['Id_No']; 
        
        $db->delete($Id_No); 

        header("Location: index.php");

        exit();
    }


?>
