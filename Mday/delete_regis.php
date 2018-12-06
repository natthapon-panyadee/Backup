<?php 
	require_once 'structure/connectDB.php';
	 if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM register_tb WHERE id_register = $id";
        $conn->query($sql);
        header('Location: booking_info.php');

      

     }
 ?>