<!-- formDetail.php -->
<html>
 	<head>
  		<?php 
   		require_once('structure/head.php');
   		?>
 	</head>
 <body>
  	<div class="container mt-5">
  		<div class="row">
	  		<?php
	  			 require_once 'structure/connectDB.php';
	  			 if(isset($_GET['id'])){
	   			 $sql = "SELECT * FROM customer_tb WHERE id_customer = ".$_GET['id'];
	    		if($result=$conn->query($sql)){
	     		if($result->num_rows>0){
	     		 while($row = $result->fetch_assoc()){
	  		?>

     		<h3><a href="customer_info.php"><<ย้อนกลับ</a></h3>
     		<div class="col-md-12">
      			<h1>ข้อมูลลูกค้า</h1>
      		</div>
		       <div class="col-md-12">  
		       		<input type="hidden" name="inputName"  id="idcs" value="<?php echo $row['id_customer'] ?>">
		        </div>
		       
		       <div class="col-md-4">  
		        	<label class="text-muted" for="inputName" >ชื่อ:</label>
		        	<input type="text" name="inputName" class="form-control" id="inputName" value="<?php echo $row['name'] ?>">
		        </div>

		        <div class="col-md-4">
		       		 <label class="text-muted" for="inputsurname" >นามสกุล:</label>
		        	 <input type="text" name="inputsurname" class="form-control" id="inputsurname" value="<?php echo $row['surname'] ?>">
		        </div>

		        <div class="col-md-4">
		        	<label class="text-muted" for="inputshop" >ชื่อร้าน:</label>
		        	<input type="" name="inputshop" class="form-control" id="inputshop" value="<?php echo $row['shopname'] ?>">
		        </div>

		        <div class="col-md-6">
		        	<label class="text-muted" for="inputnum" >เบอร์โทร:</label>
		       		 <br>
		        	<input type="number" name="inputnum" class="form-control" id="inputnum" value="<?php echo $row['phonenumber'] ?>">
		        </div>

		        <div class="col-md-6">
		        	<label class="text-muted" for="inputcitizen" >เลขบัตรประชาชน:</label>
		        	<br>
		        	<input type="number" name="inputcitizen" class="form-control" id="inputcitizen" value="<?php echo $row['citizenId'] ?>">

		        <div class="center btn-booking-style ">
		              <a  class="btn btn-primary btn-edit">
		                  อัพเดต
		               </a>
		        </div>

		       
		          </div>
		         <br>
    </div>

  <?php
      }
     }
    }
   }else{
    // header('location:alluser.php');
   }
  ?>
  
   </div>

   <script type="text/javascript">
  $('.btn-edit').on('click',function(){
   var name = $('#inputName').val();
   var surname = $('#inputsurname').val();
   var shop = $('#inputshop').val();
   var phonenumber = $('#inputnum').val();
   var citizen = $('#inputcitizen').val();
   var idcs =  $('#idcs').val();

   
  $.ajax({
        type: "POST",
        url: "structure/db_updatecustomer.php",
        data: {
         'inputName': name,
    'inputsurname': surname,
    'inputshop': shop,
    'inputnum': phonenumber,
    'inputcitizen': citizen,
    'idcs': idcs,
     
        },
        success: function(data) {
         alert(data);
    window.location.href = "customer_info.php";
        },
        
       });



 });


 </script>
 
 
 
</html>