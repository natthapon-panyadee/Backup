<?php
	// require_once '/connectDB.php';
	require_once('connectDB.php');
		 session_start();
		if (isset($_POST['name'])){
			$inputName = $_POST['name'];
			$inputsur = $_POST['surname'];
			$inputshop = $_POST['shopname'];
			$inputphone = $_POST['phonenumber'];
			$inputcitizen = $_POST['citizenId'];
		
			$sql = "INSERT INTO customer_tb ( name, surname,shopname,phonenumber, citizenId) VALUES ( '$inputName','$inputsur', '$inputshop','$inputphone', '$inputcitizen')";
			// echo $sql;
			if($conn->query($sql)){
				echo "สมัครสมาชิกสำเร็จ";
			}else{
				echo "สมัครสมาชิกผิดพลาด";
			}
			
		}

?>