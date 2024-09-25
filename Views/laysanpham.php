<!-- Hiển thị dữ liệu khác nhau -->
<div class="row">
            <?php
                $id=isset($_GET['idloai']);
                $ml= new mathang();
                $kq=$ml->LayLoaiSanPham($id);
                while($get=$kq->fetch()):
            ?>
<!-- Hiển thị phần Tên của menu -->
<div class="card mt-3" style="width: 1107px;">
<div class=" card-header text-center text-danger" >
    <?php
    if($id==1)
    {
        echo '<h3 class="title" style="font-size: 40px; text-transform: none;";><b><i>Menu Mía Mix</i></b></h3>';
    }
    if($id==2)
    {
        echo ' <h3 class="title" style="font-size: 40px; text-transform: none;";><b><i>Menu Coffe Mía</i></b></h3>';
    }
     ?>
</div>
</div>
              <!--Grid column-->
              <div class="col-lg-3 col-md-4 mb-3 text-left">

                  <div class="view overlay z-depth-1-half">
                      <img src="Content\Images\<?php echo $get['hinhsp']; ?>"  width="250px" height="250px" alt=""> <!-- Hiển thị hình ảnh -->
                      <div class="mask rgba-white-slight"></div>
                  </div>
                  <h5 class="my-4 font-weight-bold text-center" style="color: black;"><?php echo number_format($get['giasp']); //Hiển thị đơn giá?><sup><u>đ</u></sup></br>
                  </h5>
                      <span class="text-success text-center"><h5><?php echo $get['tensp']; //Hiển thị thông tin ?></h5></span></br>
                  <center><button class="btn btn-danger" id="may4" value="lap 4">Mua Ngay</button></center>

              </div>
         <?php
         endwhile;
         ?>
      </div>

