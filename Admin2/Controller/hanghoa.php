<?php
    $act="hanghoa";
    if(isset($_GET["act"]))
    {
        $act=$_GET["act"];
    }
    switch($act)
    {
        case "hanghoa":
         include_once './View/hanghoa.php';
        break;
        case "insert_hanghoa":
            include_once './View/edithanghoa.php';
        break;
        case "insert_action":
            //Nhận thông tin
            if(isset($_SERVER["REQUEST_METHOD"])=="POST")
            {
                $mahh=$_POST['mahh'];
                $tenhh=$_POST['tenhh'];
                $giasp=$_POST['giasp'];
                $hinhsp=$_POST['hinhsp'];
                $soluongton=$_POST['soluongton'];
                $maloai=$_POST['maloai'];
                $mota=$_POST['mota'];
                //Đem dữ liệu này lưu vào database
                $hh=new hanghoa();
                $check=$hh->insertHangHoa($mahh,$tenhh,$hinhsp,$giasp,$soluongton,$maloai,$mota);
                if($check!== false)
                {
                    echo '<script>alert("Đã thêm sản phẩm");</script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa" />';
                }
                else
                {
                    echo '<script>alert("Sai sót rồi! Hãy kiểm tra lại");</script>';
                    include_once './View/edithanghoa.php';
                }
            }
            break;
            case 'delete_hanghoa':
                $mahh=$_GET["id"];
                $hh= new hanghoa();
                $delete= $hh->deleteProduct($mahh);
                echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa" />';
                break;
            case 'update_hanghoa':
                include_once './View/edithanghoa.php';
            break;
    }
?>