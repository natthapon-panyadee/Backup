<?php  
if(isset($_POST['search']))

{
	$valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

	$query = " SELECT id_register, cus.name,cus.surname,cus.shopname,reg.register_time,reg.id_marketzone FROM `register_tb` as reg JOIN customer_tb as cus
	ON reg.id_customer = cus.id_customer  where CONCAT(reg.id_marketzone, cus.name, cus.surname, cus.shopname) LIKE '%".$valueToSearch."%'";
	$search_result = filterTable($query);


}
else {
	$query = "SELECT id_register, cus.name,cus.surname,cus.shopname,reg.register_time,reg.id_marketzone FROM `register_tb` as reg 		JOIN customer_tb as cus
	ON reg.id_customer = cus.id_customer";
	$search_result = filterTable($query);

}

// function to connect and execute the query
function filterTable($query)
{
	$connect = mysqli_connect("localhost", "kornwats_kg", "15072526", "kornwats_kg");
	$connect->query("set names utf8");
	$filter_Result = mysqli_query($connect, $query);
	return $filter_Result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once('structure/head.php');

	session_start();

	?>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top ">
			<a class="navbar-brand"  href="index.php"><img style="display: inline-block; height: 3rem; margin-top: -5px"
				src="https://i.ibb.co/VgwMFVc/Untitled-2-01.png" ></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav right">
					<a class="nav-item nav-link " href="index.php">หน้าแรก<span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="register.php">สมัครสมาชิก</a>
					<a class="nav-item nav-link" href="customer_info.php">ข้อมูลลูกค้า</a>
					<a class="nav-item nav-link" href="booking_market.php">ลงทะเบียนจองพื้นที่</a>
					<a class="nav-item nav-link active" href="booking_info.php">ข้อมูลการจอง</a>

				</div>
			</div>
		</nav>
	</header>
	<div class="container top-k">
		<div class="card text-center mt-5" >
			<div class="card-header">
				<h1>
					ตารางตลาด
				</h1>
			</div>
			<form action="booking_info.php" method="post">
				<div class="card-body row">
					<div class="col-md-8 offset-4 search-style"> 			
						<input class="col-md-6" type="text" name="valueToSearch" placeholder="ค้นหาข้อมูล" >
						<input class="col-md-2 search-submit" type="submit" name="search" value="ค้นหา">
					</div>
					<br><br>
					<table class="table">
						<thead>
							<tr>
								<th>รหัสพื้นที่จอง</th>
								<th>ชื่อผู้เช่า</th>
								<th>ชื่อร้านค้า</th>
								<th>วันที่</th>
								<th>การจัดการ</th>
							</tr>
						</thead>
						<?php

				// $sql = "SELECT id_register, cus.name,cus.surname,cus.shopname,reg.register_time,reg.id_marketzone FROM `register_tb` as reg JOIN customer_tb as cus
				// ON reg.id_customer = cus.id_customer where id_register";
				// if($result=$conn->query($sql)){
				// 	if($result->num_rows>0){
				// 		while($row = $result->fetch_assoc()){
						while($row = mysqli_fetch_assoc($search_result)):

							?>
							<tr>
								<td><?php echo $row['id_marketzone']; ?></td>
								<td><?php echo $row['name']; ?> &nbsp;&nbsp;<?php echo $row['surname']; ?></td>

								<td><?php echo $row['shopname']; ?></td>
								<td><?php echo $row['register_time']; ?></td>
								<td> 
									<a href="edit_regis.php?id=<?php echo $row['id_register'];?>" class=" btn btn-info">แก้ไข</a>
									<a href="delete_regis.php?delete=<?php echo $row['id_register'];?>" class=" btn btn-danger">ลบข้อมูล</a>
								</td>
							</tr>
							<?php 
						endwhile;
				// 		}
				// 	}
				// }
						?>
					</table>

				</div>
			</form>

		</div>

	</div>	
	<div class="navbar nav-footer">
		<div class="container">
			<div class="col-md-12" style="text-align: center;">
				<p>© 2018. EDUCATIONAL PURPOSE AS PART OF 802309 INTERNET DATABASE SYSTEMS
					<strong>GROUP 5</strong> ALL RIGHTS RESERVED.</p>
				</div>
			</div>
		</div>
	</body>
	</html>