<?php
if(isset($_SESSION['idkh']))
{
    $idkh=$_SESSION['idkh'];
    //Controller yêu cầu model insert vào bảng hóa đơn trước để sinh ra idhd rồi mới đc insert bảng cthoadon
    $hd=new hoadon();
    $sohd=$hd->insertHoadon($idkh);//Số 5
    $_SESSION['masohd']=$sohd;
    $total=0;
    //Lúc này đã có mã số hóa đơn vừa thêm vào thì đc insert vào cthoadon
    //Chi tiết hóa đơn tức là lấy từ giỏ hàng thêm vô
    //Nên chỉ cần duyệt qua giỏ hàng
    foreach($_SESSION['cart'] as $key => $item)
    {
        //Controller yêu cầu model insert vào cthoadon
        $hd->insertCthoadon($sohd,$item['mahh'],$item['soluong'],$item['size'],$item['total']);
        $total+=$item['total'];
        //hàm cập nhật số lượng tồn theo mã hàng
        //updateSoluongTon($mahh,)
    }
    //Sau khi insert vào bảng cthoa đơn thì update tổng tiền trở lại hóa đơn
    $hd->updateHoaDon($sohd,$idkh,$total);
}
    include_once "./Views/hoadon.php"
?>