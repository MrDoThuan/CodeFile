<?php
 class user{
    //Phương thức kiểm tra trùng user và email
    function checkUser($user,$email)
    {
        $db= new connect();
        $select="SELECT a.user,a.email FROM khachhang a WHERE a.user='$user' or a.email='$email';";
        $result=$db->LayDS($select);
        return $result;
    }
    //phương thức insert vào database
    function themUser($hoten,$address,$email,$user,$pass,$phone)
    {
        $db= new connect();
        $query="insert INTO khachhang (idkh, hoten, address, email, user, pass, phone) 
        VALUES (NULL, '$hoten', '$address', '$email', '$user', '$pass', '$phone');";
        //exec
        $result=$db->exec($query);
        return $result;
    }
    //Phương thức đăng nhập
    function logUser($user,$pass)
    {
        $db= new connect();
        $select="SELECT a.idkh, a.user, a.hoten FROM khachhang a WHERE a.user='$user' and a.pass='$pass';";
        $result=$db->LaySP($select);
        return $result;
    }
    //Phương thức kiểm tra Email
    function checkEmail($email)
        {
            $db=new connect();
            $select="select * from khachhang a
             WHERE a.email='$email'";
            $result=$db->LayDS($select);
            return $result;
        }
 }
?>