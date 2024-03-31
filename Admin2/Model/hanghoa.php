<?php
class hanghoa{
    function getHangHoa()
    {
        $db=new connect();
        $select="select DISTINCT * from sanpham a,ctsanpham b, loai c where a.idsp= b.idsp and a.idloai=c.idloai and a.trangthai=0 ";
        $result=$db->getList($select);
        return $result;
    }
    //Phương thức insert
    function insertHangHoa($mahh,$tenhh,$hinhsp,$giasp,$soluongton,$maloai,$mota)
    {
        $db=new connect();
        $query="insert into sanpham(idsp,tensp,hinhsp,giasp,soluongton,idloai,mota) 
        values ($mahh,'$tenhh','$hinhsp',$giasp,$soluongton,$maloai,'$mota');
        insert into ctsanpham(idsp,idsize) values ($mahh, $maloai);";
        $result= $db->exec($query);
        return $result;
    }
    //Lấy thông tin 1 sản phẩm
    function getHangHoaID($id)
    {
        $db=new connect();
        $select="select * from sanpham where idsp=$id;
                 select * from ctsanpham where idsp=$id" ;
        $result=$db->getInstance($select);
        return $result;
    }
    function getThongKe()
    {
        $db=new connect();
        $select="select a.tensp,sum(a.soluongmua)as soluong from sanpham a group by a.tensp";
        $result=$db->getList($select);
        return $result;
    }
    function deleteProduct($mahh)
    {
        $db=new connect();
        $query="update sanpham set trangthai=1 where idsp=$mahh";
        $result=$db->exec($query);
        return $result;
    }
}
?>