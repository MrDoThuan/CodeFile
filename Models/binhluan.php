<?php
class binhluan{
    //phương thức insert vào database
    function BinhLuan($idkh,$idsp,$content)
    {
         //B1: Kết nối với dữ liệu
         $db=new connect();
         //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
         $query="INSERT INTO comment(idcm,idkh,idsp,content) VALUES(NULL,$idkh,$idsp,'$content');";
        // echo $query;
         //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
         $db->exec($query);
         
    }
    //Phương thức hiển thị tất cả bình luận
    function ShowBinhLuan($idsp)
    {
         //B1: Kết nối với dữ liệu
         $db=new connect();
         //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
         $select="SELECT a.user, b.content FROM khachhang a, comment b WHERE a.idkh= b.idkh and b.idsp= $idsp";
         //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
         $result=$db->LayDS($select);
         return $result; //Lấy được dữ liệu về        
    }
}
?>