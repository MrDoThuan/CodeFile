<?php
    class mathang{
        function LayMatHang()
        {
            //B1: Kết nối với dữ liệu
            $db=new connect();
            //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
            $select="select a.idsp, a.tensp, a.hinhsp, a.giasp, b.idloai,b.tenloai 
            from sanpham a, loai b 
            WHERE a.idloai=b.idloai ORDER BY a.idsp DESC LIMIT 8;";
            //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result=$db->LayDS($select);
            return $result; //Lấy được dữ liệu về
        }
        function LoaiSanPham()
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là Loại Sản Phẩm, bao gồm Mía Menu và Mía Coffee)
          $select="select a.idloai,a.tenloai FROM loai a";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);
          return $result; //Lấy được dữ liệu về
        }
        function LayLoaiSanPham($id)
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là Loại Sản Phẩm, bao gồm Mía Menu và Mía Coffee)
          $select="select a.idloai, b.tensp,b.hinhsp,b.giasp FROM loai a, sanpham b WHERE a.idloai=b.idloai and a.idloai=$id";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);
          return $result; //Lấy được dữ liệu về
        }
        function LayAllMatHang()
        {
            //B1: Kết nối với dữ liệu
            $db=new connect();
            //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
            $select="select a.idsp, a.tensp, a.hinhsp, a.giasp, b.idloai,b.tenloai 
            from sanpham a, loai b 
            WHERE a.idloai=b.idloai ORDER BY a.idsp;";
            //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result=$db->LayDS($select);
            return $result; //Lấy được dữ liệu về
        }
        function Topping()
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
          $select="select t.idtp,t.tentp,t.giatp, t.hinhtp FROM topping t ORDER BY t.idtp";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);
          return $result; //Lấy được dữ liệu về
        }
        function MiaMenu()
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
          $select="select a.idsp,a.tensp,a.hinhsp,a.giasp,b.idloai,b.tenloai
           FROM sanpham a, loai b WHERE a.idloai=b.idloai and b.idloai=1 ORDER BY a.idsp DESC";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);
          return $result; //Lấy được dữ liệu về
        }
        function MiaCoffe()
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
          $select="select a.idsp,a.tensp,a.hinhsp,a.giasp,b.idloai,b.tenloai
           FROM sanpham a, loai b WHERE a.idloai=b.idloai and b.idloai=2 ORDER BY a.idsp DESC";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);
          return $result; //Lấy được dữ liệu về
        }

        //Phương thức đếm ra 12 sản phẩm (Phân trang)
        function DemSanPhamAll()
        {
          //B1: Kết nối với dữ liệu
          $db= new connect();
          //B2: Cẩn lấy cái gì thì truy vấn cái đó (Ở đây là sản phẩm dùng để phân trang)
          $select="select COUNT(a.idsp) from sanpham a, loai b WHERE a.idloai=b.idloai";
          // Ở đây là phân trang, mà phân trang thì 1 dòng, nên sử dụng laySP
          $result=$db->LaySP($select);
          return $result[0]; 
        }
        //Phương thức phân trang
        function PhanTrang($start,$limit)
        {
            //B1: Kết nối với dữ liệu
            $db=new connect();
            //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
            $select="select a.idsp, a.tensp, a.hinhsp, a.giasp, b.idloai,b.tenloai 
            from sanpham a, loai b 
            WHERE a.idloai=b.idloai ORDER BY a.idsp desc limit ".$start.",".$limit;
            //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
            $result=$db->LayDS($select);
            return $result; //Lấy được dữ liệu về
        }
        //Phương thức lấy thông tin của 1 sản phẩm
        function TtinSanPham($id)
        {
           //B1: Kết nối với dữ liệu
           $db=new connect();
           //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
           $select="SELECT a.idsp,a.tensp,a.hinhsp,a.giasp, c.idsize, c.tensize, c.giasize
           FROM sanpham a, ctsanpham b, size c WHERE a.idsp=b.idsp and b.idsize=c.idsize and a.idsp=$id;";
           //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
           $result=$db->LaySP($select);//Trả về 1 row
           return $result; //Lấy được dữ liệu về
        }
        //Phương thức lấy size của 1 sản phẩm
        function sizeSanPham($id)
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
          $select="SELECT DISTINCT a.tensize, b.idsize FROM size a, ctsanpham b 
          WHERE a.idsize=b.idsize and b.idsp=$id;";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);//Trả về 1 row
          return $result; //Lấy được dữ liệu về
        }
        //Phương thức lấy hình của 1 sản phẩm
        function hinhSanPham($id)
        {
          //B1: Kết nối với dữ liệu
          $db=new connect();
          //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
          $select="SELECT DISTINCT a.hinhsp FROM sanpham a, ctsanpham b 
          WHERE a.idsp=b.idsp and b.idsp=$id;";
          //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
          $result=$db->LayDS($select);//Trả về 1 row
          return $result; //Lấy được dữ liệu về
        }
        //Phương thức lấy hình của 1 sản phẩm phụ thuộc vào size
        function hinhSanPhamID($id)
        {
        //B1: Kết nối với dữ liệu
        $db=new connect();
        //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
        $select="SELECT DISTINCT a.hinhsp FROM sanpham a, ctsanpham b, size c 
        WHERE a.idsp=b.idsp and b.idsize=c.idsize and b.idsp=$id";
        //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
        $result=$db->LayDS($select);//Trả về 1 row
        return $result; //Lấy được dữ liệu về
        }
        //Phương thức tìm kiếm
        function TimKiem($tensp)
        {
        //B1: Kết nối với dữ liệu
        $db=new connect();
        //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là sản phảm mới)
        $select="SELECT a.idsp, a.tensp, a.hinhsp, a.giasp FROM sanpham a WHERE a.tensp like '%$tensp%'";
        //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
        $result=$db->LayDS($select);//Trả về nhiều row
        return $result; //Lấy được dữ liệu về
        }
        //Lấy thông tin hình của sản phẩm khi biết id,size
        function getHinh($id)
        {
        //B1: Kết nối với dữ liệu
        $db=new connect();
        //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là hình ảnh nếu có id)
        $select="select DISTINCT a.hinhsp FROM sanpham a, ctsanpham b WHERE a.idsp = b.idsp and a.idsp=$id";
        echo $select;
        //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
        $result=$db->LaySP($select);//Trả về nhiều row
        return $result; //Lấy được dữ liệu về
        }
        //Lấy Tên Topping khi biết id
        function getTopping($idtp)
        {
         //B1: Kết nối với dữ liệu
        $db=new connect();
        //B2: Cần lấy cái gì thì truy vấn cái đó (Ở đây là tên topping theo id)
        $select="SELECT DISTINCT a.tentp FROM topping a WHERE a.idtp=$idtp";
        //B3: Ai thực thi câu lệnh select? query, pt này nằm trong connect cụ thể là pt
        $result=$db->LayDS($select);//Trả về 1 row
        return $result; //Lấy được dữ liệu về
        }
    }
    ?>