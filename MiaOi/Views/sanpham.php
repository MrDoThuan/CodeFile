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
//cùng 1 view mà gọi nhiều dữ liệu có view giống nhau
$MM=1;
if(isset($_GET['action']))
{
    if(isset($_GET['MM']) && $_GET['MM'] =='miacoffe')
    {
        $MM=2;
    }
    else if(isset($_GET['MM']) && $_GET['MM']=='timkiem')
    {
        $MM=3;
    }
    else
    {
        $MM=1;
    }
}
?>
<!-- Hiển thị phần Tên của menu -->
<div class="card mt-3" style="width: 1107px;">
<div class=" card-header text-center text-danger" >
    <?php
    if($MM==1)
    {
        echo '<h3 class="title" style="font-size: 40px; text-transform: none;";><b><i>Menu Mía Mix</i></b></h3>';
    }
    if($MM==2)
    {
        echo ' <h3 class="title" style="font-size: 40px; text-transform: none;";><b><i>Menu Coffe Mía</i></b></h3>';
    }
    if($MM==3)
    {
        echo ' <h3 class="title" style="font-size: 40px; text-transform: none;";><b><i>Kết quả Tìm Kiếm</i></b></h3>';
    }
     ?>
</div>
</div>
<!-- Hiển thị dữ liệu khác nhau -->

              <!--Grid column-->
              <div class="row">
         <?php 
            $ml= new mathang();
            if($MM==1)
            {
                $result=$ml->MiaMenu(); // View lấy dữ liệu từ Model/mathang (lấy menu 1)
            }
            if($MM==2)
            {
                $result=$ml->MiaCoffe(); // View lấy duaxw liệu từ Model/mathang (lấy menu 2)
            }
            if($MM==3)
            {
                if(isset($_POST['txtsearch']))
                {
                    $tk=$_POST['txtsearch'];
                    $result=$ml->TimKiem($tk);
                }
            }
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

