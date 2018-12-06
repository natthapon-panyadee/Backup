<!DOCTYPE html>
<html >

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
                <a class="nav-item nav-link active" href="index.php">หน้าแรก<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="register.php">สมัครสมาชิก</a>
                <a class="nav-item nav-link" href="customer_info.php">ข้อมูลลูกค้า</a>
                <a class="nav-item nav-link" href="booking_market.php">ลงทะเบียนจองพื้นที่</a>
                <a class="nav-item nav-link" href="booking_info.php">ข้อมูลการจอง</a>
                
            </div>
        </div>
    </nav>
</header>

    <article class="container">
        <div class="col-md-12 pt2 text-cen">
                <h3 style="font-family: 'Chonburi', cursive;">ลงทะเบียนเช่าพื้นที่ตลาดนัดวันจันทร์</h3>
            </div>
        <div class="row">
            <div class="setpos col-6 col-md-3" style="border: 2px;">
                <div class="box-item mt-4">

                    <div class="box-img">
                        <a href="register.php">
                            <img  class="card-img-top img-fluid w-100 mx-auto d-block" src="https://images.unsplash.com/photo-1501556466850-7c9fa1fccb4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=853bc64f0994501f53c950ed00c5f93e&auto=format&fit=crop&w=634&w=1280&h=720" alt="img">
                        </a>
                    </div> 

                    <div class="top-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="concert-date">
                                  <h4 class="center mt-2 c_yellow fontChon"> เริ่มต้นใช้งาน </h4>
                                   <p class="mt-1"> &nbspสมัครสมาชิกใหม่เพื่อเข้าร่วมขายสินค้าตลาดนัดวันจันทร์</p>
                                </div>
                            </div> 

                        </div>
                    </div> 

                     <div class="center btn-booking-style">
                        <a href="register.php" class="btn btn-primary">
                                สมัครสมาชิก
                        </a>
                    </div>
                </div> <!-- end boxitem -->
            </div> <!-- end col-12 -->

            <div class="setpos col-6 col-md-3" style="border: 2px;">
                <div class="box-item mt-4">

                    <div class="box-img">
                        <a href="customer_info.php">
                            <img  class="card-img-top img-fluid w-100 mx-auto d-block" src="https://images.unsplash.com/photo-1528893583363-e8a0c1ddde72?ixlib=rb-0.3.5&s=1bdd82c246b75215f7d94d213f1a766f&auto=format&fit=crop&w=634&w=1280&h=720" alt="img">
                        </a>
                    </div> 

                    <div class="top-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="concert-date">
                                  <h4 class="center mt-2 c_yellow fontChon"> ข้อมูลผู้ใช้งาน </h4>
                                   <p class="mt-1"> &nbspตรวจสอบข้อมูลการสมัครสมาชิกเพื่อใช้ในการจองพื้นที่ตลาด</p>
                                </div>
                            </div> 

                        </div>
                    </div> 

                     <div class="center btn-booking-style">
                        <a href="customer_info.php" class="btn btn-primary">
                                ข้อมูลลูกค้า
                        </a>
                    </div>
                </div> <!-- end boxitem -->
            </div> <!-- end col-12 -->

            <div class="setpos col-6 col-md-3 nonset" style="border: 2px;">
                <div class="box-item mt-4">

                    <div class="box-img">
                        <a href="booking_market.php">
                            <img  class="card-img-top img-fluid w-100 mx-auto d-block" src="https://images.unsplash.com/photo-1515003233195-4a6c9dc5cbf9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=867b0c4e7ef0d920cab5212d76f1b0b3&auto=format&fit=crop&w=634&w=1280&h=720" alt="img">
                        </a>
                    </div> 

                    <div class="top-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="concert-date">
                                  <h4 class="center mt-2 c_yellow fontChon"> จองพื้นที่ตลาด </h4>
                                   <p class="mt-1"> &nbspจองพื้นที่เพื่อขายสินค้าในตลาดนัดวันจันทร์</p>
                                </div>
                            </div> 

                        </div>
                    </div> 

                     <div class="center btn-booking-style">
                        <a href="booking_market.php" class="btn btn-primary">
                               ลงทะเบียนจองพื้นที่
                        </a>
                    </div>
                </div> <!-- end boxitem -->
            </div> <!-- end col-12 -->

             <div class="setpos col-6 col-md-3 nonset" style="border: 2px;">
                <div class="box-item mt-4">

                    <div class="box-img">
                        <a href="booking_info.php">
                            <img  class="card-img-top img-fluid w-100 mx-auto d-block" src="https://images.unsplash.com/photo-1519378677857-bcaadd0a274e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=589311470fe819f7743e10ec6caffd83&auto=format&fit=crop&w=634&w=1280&h=720" alt="img">
                        </a>
                    </div> 

                    <div class="top-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="concert-date">
                                 <h4 class="center mt-2 c_yellow fontChon"> ข้อมูลการจองตลาด</h4>
                                   <p class="mt-1"> &nbspตรวจสอบข้อมูลพื้นที่ที่คุณจองในตลาดนัดวันจันทร์</p>
                                </div>
                            </div> 

                        </div>
                    </div> 

                     <div class="center btn-booking-style">
                        <a href="booking_info.php" class="btn btn-primary">
                                ข้อมูลการจอง
                        </a>
                    </div>
                </div> <!-- end boxitem -->
            </div> <!-- end col-12 -->
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



</html>

