<?php
class giohang{
    //Thêm thông tin 1 sản phẩm vào giỏ hàng
    function addCart($mahh,$size,$soluong)
    {
        //Còn thiếu hình, tên, đơn giá, thành tiền
        $sanpham= new mathang();
        $sp=$sanpham->TtinSanPham($mahh);
        $tenhh=$sp['tensp'];
        $dongia=$sp['giasp'];
        $tensize=$sp['tensize'];
        $giasize= $sp['giasize'];
        // $topping=$sp['tentp'];
        // $topping=$sanpham->getTopping($topping);
        // $tentp=$topping['tentp'];
        $hinh=$sp['hinhsp'];
        $total= $soluong * ($dongia + $giasize) ;
        $flag= false;
        //Trước khi đưa 1 object vào giỏ thì kiểm tra xem hàng đó có tồn tại trong giỏ hàng chưa
        foreach($_SESSION['cart'] as $key => $item)
        {
            if($item['mahh']==$mahh && $item['size'] == $size)
            {
                $flag= true;
                $soluong += $item['soluong']; //soluong = soluong + $item['soluong'];
                $this->updateHH($key,$soluong); //giohang::updateHH($key,$soluong);
            }
        }
        if($flag==false)
        {
            //Giỏ hàng chứa 1 món hang, món hàng là 1 object
            $item=array(
                'mahh'=>$mahh, //thuộc tính=>giá trị, trong đó thuộc tính tự đặt
                'tenhh'=>$tenhh,
                'hinh'=>$hinh,
                'size'=>$size,
                'giasize'=>$giasize,
                'soluong'=>$soluong,
                'tensize'=>$tensize,
                'dongia'=>$dongia,
                'total'=>$total,
            );
            // đem đối tượng add vào giỏ hàng a[]
            $_SESSION['cart'][]=$item;
        }
    }
    //Tính Tổng tiền
    function subTotal()
    {
        $subTotal=0;
    //Lặp qua mảng 
    foreach($_SESSION['cart'] as $item)
    {
        $subTotal+= $item['total'];
    }
    $subTotal=number_format($subTotal, 2);
    return $subTotal;
}
    //Phương thức update
    function updateHH($index,$soluong)
    {
        if($soluong<=0)
        {
            unset($_SESSION['cart'][$index]);
        }
        else
        {
            //Cập nhật tức là phép gán
            $_SESSION['cart'][$index]['soluong']=$soluong;
            $tien=$_SESSION['cart'][$index]['soluong'] * ($_SESSION['cart'][$index]['dongia'] + $_SESSION['cart'][$index]['giasize']);
            $_SESSION['cart'][$index]['total']=$tien;
        }
    }
    
}
?>