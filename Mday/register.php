<!DOCTYPE html>
<html >

<head>
    
    
    <?php 
        require_once('structure/head.php');
     ?>

</head>

<body>

   <header>
        <nav class="navbar navbar-expand-lg  navbar-light bg-light fixed-top pt-2">
            <a class="navbar-brand"  href="index.php"><img style="display: inline-block; height: 3rem; margin-top: -5px"
 src="https://i.ibb.co/VgwMFVc/Untitled-2-01.png" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav right">
                <a class="nav-item nav-link " href="index.php">หน้าแรก<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="register.php">สมัครสมาชิก</a>
                <a class="nav-item nav-link" href="customer_info.php">ข้อมูลลูกค้า</a>
                <a class="nav-item nav-link" href="booking_market.php">ลงทะเบียนจองพื้นที่</a>
                <a class="nav-item nav-link" href="booking_info.php">ข้อมูลการจอง</a>
                
            </div>
        </div>
    </nav>
</header>

    <!-- end header --> 

    <article class="container">

        <div class="row">
            <div class="col-md-12 pt2 text-cen">
                <h3 style="font-family: 'Chonburi', cursive;">ลงทะเบียนเช่าพื้นที่ตลาดนัดวันจันทร์</h3>
            </div>
            <div class="col-sm-12 col-md-6">
                <label class="pt2">กรอกชื่อ-นามสกุล</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ชื่อ-นามสกุล</span>
                    </div>
                    <input type="text" id="name" placeholder="ชื่อ" class="form-control" >
                    <input type="text" id="surname" placeholder="นามสกุล" class="form-control">
                </div>
            </div>
            <!-- end-input-name-surname -->
            <div class="col-sm-12 col-md-6">
                <label class="pt2">ข้อมูลชื่อร้าน</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">ชื่อร้าน</span>
                    </div>
                    <input type="text" id="shopname" placeholder="ชื่อร้าน" class="form-control">
                </div>
            </div>
            <!-- end-input-shopname -->
            <div class="col-sm-12 col-md-4">
                <label class="pt2" for="phonenumber">ข้อมูลเบอร์โทรศัพท์</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">เบอร์โทรศัพท์</span>
                    </div>
                    <input type="text" id="phonenumber" placeholder="ex: 08xxxxxxxx" class="form-control" required minlength="11" maxlength="11">
                </div>
            </div>
            <!-- end-input-phonenumber -->
            <div class="col-sm-12 col-md-4">
                    <label class="pt2" for="citizenId">ข้อมูลบัตรประชาชน</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">เลขบัตรประชาชน</span>
                        </div>
                        <input type="text" id="citizenId" placeholder="เลขบัตรประชาชน" class="form-control" required minlength="13" maxlength="13">
                    </div>
            </div>
                <!-- end-input-citizenId -->
            <div class="col-sm-12 col-md-4 mt-5">
               <button type="submit" class="btn btn-primary mt-3 btn-register MelonButton" onclick="formcheck(); return false"> บันทึกข้อมูล  </button> 
            </div>
            <!-- end-select-offId -->
            <!-- end-select-offId -->
            <!-- end-select-offId -->

            <div class="col-md-12 pt2" style="text-align: center ;padding-bottom: 2rem;">
                <h4>แผนตารางตลาด</h4>
                <img class="pt2" src="https://i.ibb.co/P1kWcjQ/Untitled-1-01.png" alt="01-01"  border="0">
            </div>
            <!-- end-image -->
        </div>
 

    </article>
    <br>
    <!-- footer -->
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
        $('.btn-register').on('click',function(){

            var name = $('#name').val();
            var surname = $('#surname').val();
            var shopname = $('#shopname').val();
            var phone = $('#phonenumber').val();
            var citizenId = $('#citizenId').val();
           
            $.ajax({
                type: "POST",
                url: "./structure/db_register.php",
                data: {
                    'name': name,
                    'surname': surname,
                    'shopname': shopname,
                    'phonenumber': phone,
                    'citizenId': citizenId
                    
                },
                success: function(data) {
                    alert(data);
                    window.location.href = "customer_info.php";
              },


              
          });
           
     });
        

       
     </script>
     
</html>

