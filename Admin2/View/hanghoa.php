<style>
   .item-actions button {
      padding: 5px 10px;
      margin-right: 5px;
      font-size: 14px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .item-actions button.edit {
      background-color: #17a2b8;
      color: #fff;
    }

    .item-actions button.delete {
      background-color: #dc3545;
      color: #fff;
    }
    .item-actions button.add {
      background-color: #dc3545;
      color: #fff;
    }
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

    .action-buttons .btn {
      padding: 5px 10px;
    }

    .action-buttons .btn-primary {
      background-color: #5C946E;
      border-color: #5C946E;
    }

    .action-buttons .btn-primary:hover {
      background-color: #4C8577;
      border-color: #4C8577;
    }

    .action-buttons .btn-danger {
      background-color: #C94C4C;
      border-color: #C94C4C;
    }

    .action-buttons .btn-danger:hover {
      background-color: #B73B3B;
      border-color: #B73B3B;
    }

    /* Additional Styles for Product List */
    .product-list {
      margin-top: 20px;
    }

    .product-list h2 {
      color: #4C8577;
      margin-bottom: 20px;
    }

    .product-list table {
      width: 100%;
    }

    .product-list th {
      background-color: #4C8577;
      color: #fff;
    }

    .product-list th, .product-list td {
      padding: 10px;
      text-align: center;
    }

    .product-list img {
      max-width: 100px;
    }
    .admin-pruduct img {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border-radius: 50%;
    margin-top: 0px;
    
    }
</style>
<div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <img src="Content/Images/logo.png" width="150px" height="150px"><b class="text-danger">Admin</b>
        <!-- Navigation links -->
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php?action=hanghoa">Danh sách Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=thongke">Thống Kê</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=hanghoa&act=insert_hanghoa">Thêm Sản Phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=dangnhap&act=dangxuat">Đăng Xuất</a>
          </li>
        </ul>
      </div>
      <!-- Product List -->
      <div class="col-md-9 mx-auto">
        <div class="product-list">
            <div class="admin-pruduct row">
                <h2 class="col-md-6 align-middle">Danh Sách Sản Phẩm</h2>
                <div class="col-md-6 text-right">
                  <span class=""><b >Xin chào, Quản trị Viên</b>
                  <img src="Content\Images/admin1.jpg" alt="Admin"></span>
                </div>
          </div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã hàng</th>
                <th>Tên hàng</th>
                <th>Đơn giá</th>
                <th>Hình</th>
                <th>Mã loại</th>
                <th>Mã Size</th>
                <th>Số lượng tồn</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $hh=new hanghoa();
                $result=$hh->getHangHoa();
                $t=0;
                while ($set=$result->fetch()):
                $t++;
                ?>
                <tr>
                    <td><?php echo $t ?></td>
                    <td><?php echo $set['idsp']?></td>
                    <td><?php echo $set['tensp']?></td>
                    <td><?php echo $set['giasp']?></td>
                    <!-- <td></td> -->
                    <td><img width="80px" height="80px" src="Content\Images\<?php echo $set['hinhsp']?>"/></td>
                    <td><?php echo $set['idloai']?></td>
                    <td><?php echo $set['idsize']?></td>
                    <td><?php echo $set['soluongton']?></td>
                    <td><?php echo $set['mota']?></td>
                      <td class="align-middle item-actions">
                        <button type="submit" class="edit">
                        <a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['idsp']?>" class="text-light"><span class="fa fa-edit"></span> Cập nhật</a>
                      </button>
                      <button type="submit" class="delete">
                        <a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['idsp']?>" class="text-light"><span class="fa fa-trash"></span> Xóa</a>
                      </button>
                    </td>
                  </tr>
                 <?php
                 endwhile;
                 ?>
              <!-- More product rows go here -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>