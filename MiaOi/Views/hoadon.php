
    <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
        #invoice {
            width: 100%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 10px;
        }
        #header,
        #footer {
            background-color: #00796b;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        #company-info {
            padding: 20px;
        }

        #company-info p {
            margin: 5px 0;
            color: #333;
        }

        #invoice-info {
            padding: 20px;
            background-color: #e0f2f1;
        }

        #items {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #00796b;
            color: #fff;
        }

        #total {
            padding: 20px;
            text-align: right;
        }

        #total p {
            margin: 5px 0;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        #footer {
            margin-top: 20px;
        }
    </style>
        <?php
    if(!isset($_SESSION['idkh']) || count($_SESSION['cart'])<1):
        echo '<script> alert("Hãy đăng nhập để lưu thông tin của bạn")</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
    ?>
        <?php
    else:
    ?>
    <form action="">
        <div id="invoice" class="container mt-3">
            <div id="header" class="mb-4">
                <h2>HÓA ĐƠN</h2>
            </div>
            <?php
                if(isset($_SESSION['masohd']))
                {
                    $mshd=$_SESSION['masohd'];
                    $hd=new hoadon();
                    $kh=$hd->selectTTinHoaDon($mshd);
                    $ngay=$kh['ngaydat'];
                    $hoten=$kh['hoten'];
                    $address=$kh['address'];
                    $phone=$kh['phone'];
            ?>
            <div id="company-info">
                <p>Đơn Vị: <b> <a href="https://www.facebook.com/profile.php?id=100014351534501">Công Ty TNHH MTV ĐỏThuận</a></b></p>
                <p>Cửa hàng: <i class="text-success">Mía</i><i class="text-warning">Ơi</i> - Tên Lửa</p>
                <p>Địa Chỉ: 88 Đường số 5, P. Phú Thuận, Bình Tân, Thành phố Hồ Chí Minh </p>
                <p>Điện Thoại: 0909134492 </p>
            </div>
    
            <div id="invoice-info" class="mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <p>Tên Khách Hàng: <b style="font-size: 17px;"><?php echo $hoten?></b> </p>
                        <p>Địa chỉ:<b style="font-size: 17px;"> <?php echo $address?></b></p>
                        <p>Số Điện Thoại: <b style="font-size: 17px;"><?php echo $phone?></b></p>
                    </div>
                    <div class="col-md-6">
                        <p>Số Hóa Đơn: <?php echo $mshd?></p>
                        <p>Ngày Xuất: <?php echo $ngay?></p>
                    <small class="text-danger"><i>*Vui lòng kiểm tra kĩ các thông tin trước khi thanh toán!</i></small>
                    </div>
                </div>
            </div>
    
            <div id="items">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Size</th>
                            <th>Đơn Giá</th>
                        </tr>
                            </thead>
                            <tbody>
                        <?php
                    $j=0;
                    $sp=$hd->selectTTinKhachHang($mshd);
                    while($set=$sp->fetch()):
                        $j++;
                    ?>
                    <tr>
                        <td><?php echo $j?></td>
                        <td><?php echo $set['tensp']?></td>
                        <td><?php echo $set['soluong']?></td>
                        <td><?php echo $set['size']?></td>
                        <td><?php echo number_format($set['giasp'])?></td>
                    </tr>
                            <?php
                            endwhile;
                            }
                            ?>
                            </tbody>
                </table>
            </div>
            <div id="total">
                <?php
                $gh= new giohang();

                ?>
                <p>TỔNG CỘNG: <?php echo $gh->subTotal()?></p>
            </div>
            
            <div id="footer" class="mt-4">
                <p>Cảm ơn vì đã lựa chọn MíaƠi <span class="fa fa-heart"></span></p>
            </div>
        </div>
    </form>
        <?php
        endif;
        ?>