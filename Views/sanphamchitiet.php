<style>
    .product-card {
      max-width: 1200px;
      margin: 50px auto;
      background-color: #fff;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
      padding: 20px;
    }

    .product-image {
      width: 300px;
      height: auto;
      border-radius: 10px 0 0 10px;
    }

    .product-details {
      padding: 30px;
    }

    .product-title {
      font-size: 28px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .product-price {
      font-size: 22px;
      color: #e44d26;
      margin-bottom: 20px;
    }

    .product-description {
      font-size: 16px;
      color: #555;
      margin-bottom: 20px;
    }

    .size-options {
      margin-bottom: 20px;
    }
    .buy-now-btn {
      padding: 12px 20px;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      background-color: #e44d26;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 180px;
    }
    .buy-now-btn:hover {
      background-color: #d0461e;
    }
  </style>
    <form action="index.php?action=giohang&act=giohang_action" method="post">
    <?php
      //điều phối và truyền id qua
      if(isset($_GET['id']))
      {
          $id=$_GET['id'];//26001
      //view đòi hỏi là cần thông tin của id=26001
          $ml= new mathang();
          $sp=$ml->TtinSanPham($id);// $sp=array(mahh:26001,ten...)
          $tensp=$sp['tensp'];
          // $mota=$sp['mota'];
          $giasp=$sp['giasp'];

      }
    ?>

    <div class="product-card d-flex">
        <?php
        $hinh=$ml->hinhSanPham($id);
        $get=$hinh->fetch();
        ?>
      <img class="product-image img-fluid" src="Content\Images\<?php echo $get['hinhsp'] ?>" alt="Product 1">
      <div class="product-details">
        <input type="hidden" name="mahh" value="<?php echo $id ?>">
        <!-- Tên sản phẩm -->
        <div class="product-title"><?php echo $tensp ?></div>
        <!-- <div class="rating">
          <div class="pstar" data-pid="<?=$id?>">
           <b> Raitng: </b>
            <?php
              // for($i=1;$i<=5;$i++)
              // {
              //   $img=$i<=$rating?"star":"star-blank";
              //   echo "<img src='Content/Images/$img.png' style='width: 20px;cursor:pointer;' data-set='$i'>"; 
              // }
            ?>
          </div>
        </div> -->
        <b><div class="product-price" id="totalPrice" ><?php echo number_format($giasp) ?>đ</div></b>
        <div class="product-description"> 
          <!-- <p><?php echo $mota ?></p> -->
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="size-options">
              <label for="sizeSelect"><b>Chọn size:</b></label>
              <select class="form-control" name="size" id="sizeSelect" style="width: 220px">
                <?php
                $size=$ml->sizeSanPham($id);
                while($get=$size->fetch()):
                ?>
                <option value="<?php echo $get['idsize']?>"><?php echo $get['tensize'] ?></option>
                <?php
                endwhile;
                ?>
              </select>
            </div>
          </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for=""><b>Số lượng:</b></label>
                <input type="number" name="soluong" value="1" min="0" id="quantityInput" class="form-control" style="width: 220px;" aria-describedby="helpId" placeholder="">
              </div>
            </div>

        </div>
        <button type="submit" class="buy-now-btn" data-toggle='modal' data-target='#myModal'>Mua Ngay <i class="fas fa-shopping-cart"></i></button>
      </div>
    </div>
  </form>
<!-- hidden để hiển thị star -->
<form id="ninForm_2" method="post" target="_self">
        <input type="hidden" name="pid" id="ninPdt">
        <input type="hidden" name="stars" id="ninStar">
    </form>
  <?php
        if(isset($_SESSION['idkh'])):
        ?>
        <div class="product-card">
            <label><b>Bình luận:</b></label>
                <form action="index.php?action=binhluan" method="post">
                <div class="row"> 
                        <input type="hidden" name="txtmahh" value=" <?php echo $id ?> "/>
                        <img src="Content/images/people.jpg" width="50px" height="50px"; style="margin-right: 3px;" />
                        <textarea class="input-field" type="text" name="comment"  rows="1" cols="60" id="comment" placeholder="Thêm bình luận">  </textarea>
                        <input type="submit" name="submit" class="buy-now-btn" id="submitButton" style="width: 91px; height:48px; margin-left: 3px;" value="Gửi">
                                    
                </div>
                </form>
                <div class="row">
                    <b>Các bình luận</b>
                    <?php
                    $bl=new binhluan();
                    $show=$bl->ShowBinhLuan($id);
                    while($get=$show->fetch()):
                    ?>
                    <div class="col-12">
                      <div class="row">
                        <img src="Content/images/people.jpg" alt="" width="30px" height="30px">
                            <?php echo '<b>'. $get['user'] . '</b>:'. $get['content']; ?>
                      </div>
                    </div>
                    <?php
                    endwhile;
                  
                    ?>
                </div>
          </div>
          <?php
          endif;
          ?>
  <script>
// Khởi tạo biến giá và giá các loại sản phẩm
var basePrice = <?php echo $giasp; ?>;
var sizePrices = {
  '1': 0,     // Size nhỏ
  '2': 3000,  // Size vừa
  '3': 0,     // Size lớn, giả sử giống size nhỏ
  // Thêm các size khác nếu cần
};

// Cập nhật tổng giá trị khi có sự thay đổi
function updateTotal() {
  var selectedSize = document.getElementById('sizeSelect').value;
  // Chuyển đổi giá trị sang số nguyên, nếu không hợp lệ thì gán giá trị là 0
  var quantity = parseInt(document.getElementById('quantityInput').value, 10) || 0; 

  // Kiểm tra xem selectedSize có tồn tại trong sizePrices không
  if (!sizePrices.hasOwnProperty(selectedSize)) {
    selectedSize = '1'; // Nếu không tồn tại, mặc định là size '1'
  }

  // Tính giá theo size
  var sizePrice = sizePrices[selectedSize] || 0; // Nếu không tồn tại giá cho size này, gán giá trị là 0

  // Tính tổng giá trị
  var total = (basePrice + sizePrice) * quantity;

  // Hiển thị tổng giá trị
  document.getElementById('totalPrice').innerHTML = total.toLocaleString() + 'đ';
}

// Sự kiện khi thay đổi size
document.getElementById('sizeSelect').addEventListener('change', function () {
  updateTotal();
});

// Sự kiện khi thay đổi số lượng
document.getElementById('quantityInput').addEventListener('input', function () {
  updateTotal();
});

    </script>
    <script>
      var stars={
        init:function(){
          for(let docket of document.getElementsByClassName("pstar")) // thấy đc thẻ div bên ngoài
          {
            for(let star of docket.getElementsByTagName("img"))// 5 ngôi sao
            {
              star.addEventListener("click", stars.click);
            }
          }
        },
        click:function()
        {
          let all=this.parentElement.getElementsByTagName("img"),
          set=this.dataset.set,//3
          i=1;

          for(let star of all)
          {
            star.src=i<=set?"star.png":"star-blank.png";
            i++;
          }
          //Đỗ dữ liệu lên form, mà from này ẩn
          document.getElementById("ninPdt").value=this.parentElement.dataset.pid;
          document.getElementById("ninStar").value=this.dataset.set;
          document.getElementById("ninForm_2").submit();
        }
      };
      windonw.addEventListener("DOMContentLoaded", star.init);
    </script>