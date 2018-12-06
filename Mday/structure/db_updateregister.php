<?php 
	require_once('connectDB.php');





	if (isset($_POST['idcs'])>0){
		$inputZone = $_POST['inputzone'];
		$idregister = $_POST['idcs'];
		
		
		$sql = "UPDATE register_tb  SET id_marketzone = '$inputZone' WHERE id_register = $idregister ";
		// echo $sql;
		if($conn->query($sql)){
			echo "แก้ไขสำเร็จ";
		}
		
	}else{
			echo "แก้ไขผิดพลาด";
		}
	

 ?>