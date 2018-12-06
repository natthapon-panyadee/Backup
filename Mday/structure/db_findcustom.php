<?php
	if (file_exists('connectDB.php')) {
    require('./connectDB.php'); // This is line 38
	}
	require_once('head.php');
	if(isset($_POST['tag'])){
		$tag = $_POST['tag'];
		$page = $_POST['page']*20;
		$sql = "SELECT * FROM customer_tb WHERE id_customer";
		if($tag!=""){
			$sql.= " AND name LIKE '%$tag%'";
		}
		$sql.= " ORDER BY id_customer DESC LIMIT $page,20";
		// echo $sql;
		if($result=$conn->query($sql)){
			if($result->num_rows>0){
				while($row = $result->fetch_assoc()){
					?>
					
			
			<table class="table" id="show_item">
				<thead>
					<tr>
						<th>รหัสผู้เช่า</th>
						<th>ชื่อ</th>
						<th >เบอร์โทรศัพท์</th>
					</tr>
				</thead>
				<?php
				$sql = "SELECT * from customer_tb where id_customer ";
				if($result=$conn->query($sql)){
					if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $row['id_customer']; ?></td>
								<td><?php echo $row['name']; ?> &nbsp;&nbsp; <?php echo $row['surname']; ?></td>
								<td><?php echo $row['phonenumber']; ?></td>

								<td>
									<a href="edit_id.php?id=<?php echo $row['id_customer'];?>" class=" btn btn-info" >แก้ไข</a>
									 <a href="delete_customer.php?delete=<?php echo $row['id_customer'];?>" class=" btn btn-danger" style="background-color: #cc0000!important;" >ลบข้อมูล</a>
								</td>
							</tr>
							<?php 
						}
					}
				}
				?>
			</table>
			
	
					<?php
				}
			}
		}
	}
	
?>