<style>
    .product-card {
      max-width: 300px;
      margin: 20px auto;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
      box-shadow: 0 0 10px rgba(255, 165, 0, 0.5), 0 0 20px rgba(255, 0, 0, 0.3), 0 0 40px rgba(255, 165, 0, 0.5); /* Hiệu ứng box-shadow */
    }
    .product-card img {
      width: 250px;
      height: 250px;
    }
    .product-card:hover {
      transform: scale(1.05);
    }
    .product-card .card-body {
      padding: 20px;
    }
  </style>
<main style="
 .title {
    font-family: 'Pacifico', cursive;
    margin-top: 4px;
}

">
        <div class="mt-3">
            <div class="text-center text-danger" >
                <h3 class="title" style="font-size: 40px";><b><i>Nước Của Mía Nè</i></b></h3>
            </div>
        </div>
                          <!--Grid column-->
                          <div class="row">
                              <?php 
                        $ml= new mathang();
                        $result=$ml->LayMatHang(); // View lấy dữ liệu từ Model/mathang (8 sản phẩm)
                        //Đổ dữ liệu lên View
                        while($get=$result->fetch()): // $get=array(...)
                            ?>
                  <div class="col-md-3">
                      <a href="index.php?action=sanpham&MM=sanphamchitiet&id=<?php echo $get['idsp']?>">
                    <div class="product-card">
                      <img src="Content\Images\<?php echo $get['hinhsp']?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $get['tensp']?></h5>
                        <p class="card-text"><?php echo number_format($get['giasp']);?></p>
                      </div>
                    </div>
                </a>
                </div>
                     <?php 
                        endwhile;
                     ?>
                </div>
            <a href="index.php?action=sanphamAll">
                <center><button type="button" class="btn btn-danger">Xem Tất Cả</button></center>
            </a>

    <!--
  <div class="container">
<a href="index.php?action=sanpham&MM=sanphamchitiet&id=<?php echo $get['idsp']?>">
    <h2 class="text-center mt-4">Danh Sách Sản Phẩm</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="product-card">
          <img src="Content\Images\<?php echo $get['hinhsp']?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $get['tensp']?></h5>
            <p class="card-text"><?php echo number_format($get['giasp']);?></p>
          </div>
        </div>
      </div>
    </div>
</a>
  </div>
    -->
     </main>