<?php 
	require_once 'structure/connectDB.php';
	 if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM customer_tb WHERE id_customer = $id";
        $conn->query($sql);
        header('Location: customer_info.php');

      

     }
 ?>