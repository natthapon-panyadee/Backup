<!-- formDetail.php -->
<html>

<head>
	<?php 
	require_once('structure/head.php');
	?>

</head>

<body>
	<div class="container mt-5">
		<?php
		require_once 'structure/connectDB.php';
		if(isset($_GET['id'])){
			$sql = "SELECT  id_register,cus.name,cus.surname,cus.shopname,reg.register_time,reg.id_marketzone FROM `register_tb` as reg JOIN customer_tb as cus
			ON reg.id_customer = cus.id_customer WHERE id_register = ".$_GET['id'];
			if($result=$conn->query($sql)){
				if($result->num_rows>0){
					while($row = $result->fetch_assoc()){
		?>
		<div class="container">
			<div class="col-12 mt-4">
				<h3><a href="customer_info.php">
						<<ย้อนกลับ</a> </h3> </div> 
						<div class="col-12  ">
							<h1>ข้อมูลลูกค้า</h1>
							<div style="padding-bottom: 30px;">
								<div class="form-group">
									<input type="hidden" name="inputName" id="idcs" value="<?php echo $row['id_register'] ?>">
								</div>

								<div class="form-group">
									<label class="text-muted" for="inputName">
										<span>ชื่อ:  </span>
										<span style="font-size: 2.5rem;"><?php echo $row['name'] ?></span>
										<span style="font-size: 2.5rem;"><?php echo $row['surname'] ?></span>
										
									</label>
								</div>
								<div class="form-group">
									<label class="text-muted" for="inputshop">
										<span>ชื่อ:  </span>
										<span style="font-size: 2.5rem;"><?php echo $row['shopname'] ?></span>
									</label>
								</div>
								<div class="form-group">
									<label class="text-muted" for="inputnum">
										<h5>พื้นที่จองตลาด:</h5>
									</label>

									<select class="form-control" id="inputzone">
										<?php
											require_once 'structure/connectDB.php';
											$sql = "SELECT * from market_tb ";
											if($result=$conn->query($sql)){
												if($result->num_rows>0){
													while($row = $result->fetch_assoc()){
														?>
										<option value="<?php echo $row['id_marketzone']; ?>">
											<?php echo $row['id_marketzone']; ?>
										</option>
										

								

								<?php 
												}
											}
										}
										?>
								</select>
								<br>
								<br>
								<div class="center btn-booking-style ">
		              				<a  class="btn btn-primary btn-edit">
		                 			 อัพเดต
		              					 </a>
		        				</div>
						</div>
			</div>
		</div>
	</div>
</div>
</body>

		<?php
					}
				}
			}
		}
		?>

		
	

	<script type="text/javascript">
		$('.btn-edit').on('click', function () {
			var zone = $('#inputzone').val();

			var idcs = $('#idcs').val();


			$.ajax({
				type: "POST",
				url: "structure/db_updateregister.php",
				data: {
					'inputzone': zone,
					'idcs': idcs,

				},
				success: function (data) {
					alert(data);
					window.location.href = "booking_info.php";
				},

			});



		});


	</script>

</body>


</html>