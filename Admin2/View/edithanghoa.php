<style>
  .sidebar {
      background-color: #D0E7D2;
      color: #000;
      padding: 20px;
      height: 100vh;
    }
    .nav-link {
      color: #000 !important;
      position: relative;
      transition: border 0.3s;
    }

    .nav-link.active {
      font-weight: bold;
      color: #4C8577 !important;
      border-left: 5px solid #4C8577;
    }

    .nav-link:hover {
      cursor: pointer;
      border-left: 5px solid #5C946E;
    }

    </style>
    <div class="row">
       <!-- Sidebar -->
        <div class="col-md-2 sidebar">
          <img src="Content/Images/logo.png" width="150px" height="150px"><b class="text-danger">Admin</b>
          <!-- Navigation links -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=hanghoa">Danh sách Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=thongke">Thống Kê</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active " href="index.php?action=hanghoa&act=insert_hanghoa">Thêm Sản Phẩm</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=dangnhap&act=dangxuat">Đăng Xuất</a>
            </li>
          </ul>
        </div>
        <div class="col-md-5 mx-auto align-middle justify-content-center text-center">

          <?php
          if(isset($_GET['id']))
          {
            $mahh=$_GET['id'];
            //Truy vẫn thông tin của id
            $hh=new hanghoa();
            $kq=$hh->getHangHoaID($mahh);
            $tenhh=$kq['tensp'];
            $giasp=$kq['giasp'];
            $hinhsp=$kq['hinhsp'];
            $soluongton=$kq['soluongton'];
            $mota=$kq['mota'];
          }
          ?>
            <form action="index.php?action=hanghoa&act=insert_action" method="post" enctype="multipart/form-data">
              <table class="table" style="border: 0px;">
          
                <tr>
                  <td>Mã hàng</td>
                  <td> <input type="text" class="form-control" value="<?php if(isset($mahh)) echo $mahh ?>" name="mahh" /></td>
                </tr>
                <tr>
                  <td>Tên hàng</td>
                  <td><input type="text" class="form-control" value="<?php if(isset($tenhh)) echo $tenhh ?>" name="tenhh"  maxlength="100px"></td>
                </tr>
                <tr>
                <tr>
                  <td>Giá Sản phẩm</td>
                  <td><input type="text" class="form-control" value="<?php if(isset($giasp)) echo $giasp ?>" name="giasp"></td>
                </tr>
                <tr>
                    <input type="text" class="form-control text-center" name="nhom" readonly placeholder="From Mía Ơi With Love" >
                  </td>
                </tr>
                <tr>
                  <td>Mã loại sản phẩm</td>
                  <td>
                    <select name="maloai" class="form-control" style="width:150px;">
                      <option value="">-</option>
                      <?php
                      $loai= new loai();
                      $result= $loai->getLoai();
                      while($set=$result->fetch()):
                      ?>
                      <option value="<?php echo $set['idloai']?>"><?php echo $set['tenloai']?></option>
                      <?php
                      endwhile;
                      ?>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Hình sản phẩm</td>
                  <td><input type="text" class="form-control" name="hinhsp" value="<?php if(isset($hinhsp)) echo $hinhsp ?>" placeholder="Liên kết hoặc ảnh đã tải">
                  </td>
                </tr>
                <tr>
                  <td>Số lượng sản phẩm</td>
                  <td><input type="text" class="form-control" value="<?php if(isset($soluongton)) echo $soluongton ?>" name="soluongton">
                </td>
              </tr>
              <tr>
                <td>Size</td>
                <td>
                  <select name="size" class="form-control"   style="width: 150px;">
                  <option value=""></option>
                  <?php
                  $size= new loai();
                  $result=$size-> getSize();
                  while($set=$result->fetch()):
                  ?>
                  <option value="<?php echo $set['idsize']?>"><?php echo $set['tensize']?></option>
                  <?php
                  endwhile;
                  ?>
                  </select>
              </td>
            </tr>
            <tr>
              <td>Mô tả</td>
              <td><input type="text" class="form-control" name="mota">
              </td>
            </tr>
          
                <tr>
                  <td colspan="2">
                    <input type="submit" value="submit">
                    
          
                  </td>
                </tr>
          
              </table>
            </form>
        </div>
    </div>