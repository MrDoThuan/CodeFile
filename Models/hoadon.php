<?php
    class hoadon{
        //Phương thức insert vào bảng hóa đơn
        function insertHoadon($idkh)
        {
            $date= new DateTime('now');
            $ngay= $date->format('Y-m-d');
            $db= new connect();
            $query="insert into hoadon(idhd,idkh,ngaydat,tongtien) values(Null,$idkh,'$ngay',0)";
            $db->exec($query);
            //insert xong thì cần lấy ra mã hóa đơn vừa insert 
            $select="select idhd from hoadon order by idhd desc limit 1";
            $mahd=$db->LaySP($select);
            return $mahd[0]; //trả về mảng $mahd=[5]; trả về số 5      
        }
        //Phương thức insert vào bảng cthoadon
        function insertCthoadon($idhd,$idsp,$soluong,$size,$thanhtien)
        {
            $db= new connect();
            $query="insert into cthoadon(idhd,idsp,soluong,size,thanhtien,tinhtrang) 
            values($idhd,$idsp,$soluong,'$size',$thanhtien,0)";
            $db->exec($query);
        }
        //Phương thức update tiền lại vào bảng hoadon
        function updateHoaDon($idhd,$idkh,$tongtien)
        {
            $db= new connect();
            $query="update hoadon set tongtien=$tongtien WHERE idhd=$idhd and idkh=$idkh";
            $db->exec($query);
        }
        //Phuong thức hiển thị thông tin khách hàng dựa vào idhd
        function selectTTinHoaDon($idhd)
        {
            $db=new connect();
            $select="SELECT b.idhd, b.ngaydat, a.hoten, a.address, a.phone FROM khachhang a INNER JOIN hoadon b on a.idkh=b.idkh WHERE b.idhd=$idhd";
            $result=$db->LaySP($select);
            return $result;
        }
        //Phương thức lấy thông tin hàng hóa theo mã số hóa đơn
        function selectTTinKhachHang($idhd)
        {
            $db=new connect();
            $select="SELECT DISTINCT a.tensp, c.topping, c.size, a.giasp, c.soluong FROM sanpham a, ctsanpham b, cthoadon c WHERE a.idsp=b.idsp and a.idsp=c.idsp and c.idhd=$idhd";
            $result=$db->LayDS($select);
            return $result;
        }
    }
?>