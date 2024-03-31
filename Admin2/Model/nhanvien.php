<?php
    class nhanvien{
        function getAdmin($user,$pass)
        {
            $db=new connect();
            $select="select username,matkhau,hinhnv from nhanvien where username='$user' and matkhau='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
        function getNameAndPic($id)
        {
            $db=new connect();
            $select="select username,matkhau,hinhnv from nhanvien where idnv=$id";
            $result=$db->getInstance($select);
            return $result;
        }
    }
?>