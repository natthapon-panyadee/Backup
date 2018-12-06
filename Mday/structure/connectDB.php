<?php

    error_reporting(E_ALL);

    $conn = new mysqli('localhost' , 'kornwats_kg' , '15072526' , 'kornwats_kg');
    $conn -> set_charset('utf8');
    mysqli_set_charset($conn, "utf8");
   
    // echo $conn->connect_error;
    // echo $conn->connect_errno;

    
    if($conn->connect_errno){
        echo "Can not connect to Database: " .$conn->connect_error ;
        exit();
    }else {
    	// echo "สำเร็จ";
    }
                                    
?>
