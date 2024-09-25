<?php
    class page{
        //phương thức tính số trang
        function TimTrang($count,$limit) //12,4
        {
            $page=(($count%$limit)==0 ? $count/$limit : ceil($count/$limit));
            return $page;
        }
        //phương thức tính start dựa vào URL, tức là trang hiện tại
        // Tạo 1 biến để chứa trang hiện tại, (Ở đây biến có tên là page)
        function TimStart($limit)
        {
            if(!isset($_GET['page']) || $_GET['page']==1)
            {
                $start=0;
            }
            else
            {
                $start=($_GET['page']-1)*$limit;
            }
            return $start;
        }
    }
?>