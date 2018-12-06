<?php 
	require_once('connectDB.php');





	if (isset($_POST['idcs'])>0){
		$inputFullName = $_POST['inputName'];
		$inputsurname = $_POST['inputsurname'];
		$inputshop = $_POST['inputshop'];
		$phonenumber = $_POST['inputnum'];
		$inputcitizen = $_POST['inputcitizen'];
		$idcustomer = $_POST['idcs'];
		
		
		$sql = "UPDATE customer_tb  SET name = '$inputFullName', surname = '$inputsurname', shopname = '$inputshop',phonenumber = $phonenumber ,citizenId = '$inputcitizen' WHERE id_customer = $idcustomer ";
		// echo $sql;
		if($conn->query($sql)){
			echo "แก้ไขสำเร็จ";
		}
		
	}else{
			echo "แก้ไขผิิดพลาด";
		}
	

 ?>