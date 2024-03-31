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
<?php
//B1: Tổng số sản phẩm trên trang tổng số sản phẩm
$ml= new mathang();
//Cách 1: Dùng truy vấn count
// $count= $ml->DemSanPhamAll();// Lấy được 12 sản phẩm
//Cách 2: Dùng rowcount
$count= $ml->LayAllMatHang()->rowCount(); // Lấy được 12 sản phẩm

//B2: Cho giới hạn 1 trang là bao nhiêu sản phẩm
$limit=4;

//B3: Xác định có bao nhiêu trang, và start
$trang= new page();
$page=$trang->TimTrang($count,$limit);//2
//Lấy Start
$start= $trang->TimStart($limit);
?>

<div class="card mt-3" style="width: 1107px;">
            <div class=" card-header text-center text-danger" >
                <h3 class="title" style="font-size: 40px";><b><i>Nước Của Mía Tất</i></b></h3>
            </div>
        </div>
<!-- Hiển thị tất cả sản phẩm -->
              <!--Grid column-->
              <div class="row">
         <?php 
            $ml= new mathang();
            // $result=$ml->LayAllMatHang(); // View lấy dữ liệu từ Model/mathang (12 sản phẩm)
            //Hiên thị sản phẩm theo dạng phân trang
            $result=$ml->PhanTrang($start,$limit);
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
          <div class="offset-3" style="margin-left: 440px;">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                <?php
                //Lấy giá trị trang hiện tại
                $chuyentrang=isset($_GET['page']) ? $_GET['page'] : 1;
                 if($chuyentrang > 1 && $page >1)
                 {
                    echo '<li class="page-item ml-1"><a class="page-link" href="index.php?action=sanphamAll&page='.($chuyentrang-1).'">Prev</a></li>';
                 }
                    for($i=1; $i <= $page; $i++) {
                ?>
                <li class="page-item ml-1"><a class="page-link" href="index.php?action=sanphamAll&page=<?php echo $i;?>"><?php echo $i; ?></a></li>
                <?php
                    }
                 if($chuyentrang < $page && $page >1)
                 {
                    echo '<li class="page-item ml-1"><a class="page-link" href="index.php?action=sanphamAll&page='.($chuyentrang+1).'">Next</a></li>';
                 }
                ?>
          </ul>
        </nav>
        </div>