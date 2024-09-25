<style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .cart-table {
      width: 1200px;
      border-collapse: collapse;
      margin-top: 20px;
    }

    .cart-item {
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      background-color: #fff;
      margin-bottom: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out,border 0.2s ease-in-out;
    }

    .cart-item:hover {
      transform: scale(1.02);
      border: 1px solid transparent;
    }

    .cart-item img {
      max-width: 225px;
      height: 260px;
      border-bottom: 1px solid #ddd;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .item-details {
      padding: 20px;
    }

    .item-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #333;
    }

    .item-size,
    .item-topping,
    .item-price,
    .item-actions {
      font-size: 16px;
      margin-bottom: 8px;
      color: #555;
    }

    .item-price {
      font-size: 20px;
      font-weight: bold;
      color: #e44d26;
    }

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
    
    .item-actions button.bill {
      background-color: #f16529;
      color: #fff;
    }

    .item-actions button:hover {
      background-color: #555;
    }

    .total-price {
      font-size: 24px;
      font-weight: bold;
      color: #e44d26;
    }

    .table th, .table td {
      border: none;
    }

    .table thead th {
      background-color: #e44d26;
      color: #fff;
      border: none;
    }

    .table tfoot th {
      background-color: #343a40;
      color: #fff;
    }
 input[type="checkbox"] {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 25px;
  height: 25px;
  border: 2px solid #555;
  border-radius: 4px;
  outline: none;
  cursor: pointer;
  position: relative;
}
  </style>

  <div class="container">
    <table class="table cart-table">
        <?php
        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0)
        {
        ?>
        <form action="index.php?action=giohang&act=update_gh" method="post">
      <thead class="thead-light">
        <tr>
          <th scope="col">Hình Ảnh</th>
          <th scope="col">Tên Sản Phẩm</th>
          <th scope="col">Giá Sản Phẩm</th>
          <th scope="col">Size</th>
          <th scope="col">Số lượng</th>
          <th scope="col">Thành Tiền</th>
          <th scope="col" style="width: 170px;">Thao Tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $t=0;
        foreach ($_SESSION['cart'] as $key => $item):
        ?>
        <tr class="cart-item">
          <td class="align-middle">
            <!--Lấy hình ảnh-->
            <img src="Content\Images\<?php echo $item['hinh']?>">
          </td>
          <td class="align-middle">
            <div class="item-details">
              <!--Lấy tên sản phẩm-->
              <div class="item-title" style="font-size: 20px;"><?php echo $item['tenhh']?></div>
            </div>
          </td>
          <!--Lấy giá sản phẩm-->
          <td class="align-middle item-price"><?php echo number_format($item['dongia'])?></td>
          <!--Lấy size-->
          <td class="align-middle item-size"><?php echo $item['size']?></td>
          <!--Lấy số lượng sản phẩm-->
          <td class="align-middle item-quantity" ><input type="text" style="width: 40px!important" name="newqty[<?php echo $key;?>]" value="<?php echo $item['soluong']?>"></td>
          <!--Lấy tổng tiền-->
          <td class="align-middle item-total"><?php echo number_format($item['total'])?></td>
          <td class="align-middle item-actions">
            <button class="edit" type="submit"><i class="fas fa-edit"></i> Sửa</button>
            <a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key;?>">
              <button class="delete" type="button"><i class="fas fa-trash-alt"></i> Xóa</button>
            </a>
          </td>
        </tr>
        <!-- Thêm các cart-item khác nếu cần -->
        <?php 
        endforeach;
        ?>
      </tbody>
      </form>
      <tfoot>
      <tr class="cart-item">
        <?php
        $gh= new giohang();

        ?>
          <td></td>
          <td></td>
          <td></td>
          <td colspan="2" class="text-right"><strong>Tổng Tiền:</strong></td>
          <td class="total-price"><?php echo $gh->subTotal();?></td>
          <td class="align-middle item-actions">
              <a href="index.php?action=thanhtoan">
              <button class="bill"><i class="fas fa-list"></i> Hóa Đơn</button>
            </a>
            </td>
        </tr>
      </tfoot>
      <?php
        }
        else
       {
            echo '<script> alert("Giỏ hàng của bạn rỗng");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=main"/>';
       }
      ?>
    </table>
  </div>