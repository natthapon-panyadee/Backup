<?php
	// require_once '/connectDB.php';
	require_once('connectDB.php');
		 session_start();
		if (isset($_POST['get_customer'])){
			$inputid = $_POST['get_customer'];
			$inputzone = $_POST['get_marketzone'];
			$inputtype = $_POST['get_price'];
			$inputdate = date("d-m-Y");
			$status = 1;
			
			//$inputdate = $_POST['datepicker'];
		
			$sql = "INSERT INTO register_tb(id_customer,id_marketzone,id_price,register_time) VALUES ( '$inputid','$inputzone', '$inputtype','$inputdate')";
			
			// echo $sql;
			if($conn->query($sql)){
				echo "จองสำเร็จ";
			}else{
				echo "สมัครสมาชิกผิดพลาด";
			}
			
		}

?>