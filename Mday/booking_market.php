<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require_once('structure/head.php');
     ?>

</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top">
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
                <a class="nav-item nav-link active" href="booking_market.php">ลงทะเบียนจองพื้นที่</a>
                <a class="nav-item nav-link" href="booking_info.php">ข้อมูลการจอง</a>
                
            </div>
        </div>
    </nav>
</header>
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="/resources/demos/style.css">
  
    <!-- end header -->

    <article class="container top-k">

        <div class="row">

            <div class="col-md-7">
                <div class="pt2" style="text-align: center ;padding-bottom: 2rem;">
                    <h4 style="font-family: 'Chonburi', cursive;">แผนตารางตลาด</h4>
                    <img class="pt2" style="width: 75%" src="https://i.ibb.co/P1kWcjQ/Untitled-1-01.png" alt="01-01"  border="0"></a>
                </div>  
            </div>
            
            <!-- end-image -->
            
            <div class="col-md-5">

                 <div class="col-md-12 pt2 text-cen">
                       <h4 style="font-family: 'Chonburi', cursive;">ลงทะเบียนจองพื้นที่ตลาด</h4>
                 </div>


                <div class="col-sm-12">
                    <label class="pt2">รหัสผู้เช่า</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">รหัสผู้เช่า</span>
                        </div>
                        <input type="text" id="id_customer" placeholder="รหัสผู้เช่า" class="form-control">
                    </div>
                </div>
               
                <div class="col-sm-12">
                        <label class="pt2" for="id_marketzone">เลือกบล็อคตลาด</label>
                            <select class="form-control" id="id_marketzone">
                                    
                    <?php
                        $sql = "SELECT `id_marketzone` FROM `market_tb`";
                            if($result=$conn->query($sql)){
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                    ?>

                                        <option value="<?php echo $row['id_marketzone']; ?>" >
                                            <?php echo $row['id_marketzone']; ?>
                                            </option>
                    <?php 
                                    }
                                }
                            }
                    ?>
                            </select>

                        <label style="font-family: 'Chonburi', cursive; font-size:0.75rem;">A: Cloth , B: Food , C: Drink , D: Cosmetic&Accessorie , E: Etc</label>
                </div>

                 <div class="col-sm-12">
                        <label class="pt2" for="id_price">ราคา</label>
                            <select class="form-control" id="id_price">
                                    
                    <?php
                        $sql = "SELECT * FROM `price_tb` ";
                            if($result=$conn->query($sql)){
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                    ?>

                                        <option value="<?php echo $row['id_price']; ?>" >
                                            <?php echo $row['typeprice']." ".$row['price']?>
                                            </option>
                    <?php 
                                    }
                                }
                            }
                    ?>
                            </select>
                </div>

                <div class="col-md-12 mt-5">
                    <button  class="btn btn-primary" id="btn-book">จองพื้นที่ตลาด</button>
                </div>
            </div>
           </div>
            
        </div> <!-- container -->
 

    </article>

    <!-- footer -->
    <br>
        <div class="navbar nav-footer">
            <div class="container">
                <div class="col-md-12" style="text-align: center;">
                    <p>© 2018. EDUCATIONAL PURPOSE AS PART OF 802309 INTERNET DATABASE SYSTEMS
                <strong>GROUP 5</strong> ALL RIGHTS RESERVED.</p>
                </div>
            </div>
        </div>
    <!-- end-footer -->


   
</body>
<script type="text/javascript"> 
        $('#btn-book').on('click',function(){

            var id_customer = $('#id_customer').val();
            var id_marketzone = $('#id_marketzone').val();
            var id_price = $('#id_price').val();
           //var datepicker = $('#datepicker').val();
            
           
            $.ajax({
                type: "POST",
                url: "./structure/db_booking_market.php",
                data: {
                    'get_customer': id_customer,
                    'get_marketzone': id_marketzone,
                    'get_price': id_price,
                    //'gets_datepicker': datepicker,
                   
                    
                },
                success: function(data) {
                    alert(data);
                    window.location.href = "booking_info.php";
              },
          });
        });
        
    </script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>

</html>