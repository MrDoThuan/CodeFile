<?php
$dp='dangnhap';
if(isset($_GET['dp']))
{
    $dp=$_GET['dp'];
}
switch($dp)
{
    case 'dangnhap':
        include_once "./Views/dangnhap.php";
        break;
    case 'dangnhap_action':
        $user='';
        $pass='';
    if(isset($_POST['txtuser']) && isset($_POST['txtpass']))
    {
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        $saltF="DT117#!";
        $saltL="HT22&&@";
        $passnew=md5($saltF.$pass.$saltL);
        //controller yêu cầu model truy vấn xem có user đó hay kh
        $kh=new user();
        $login=$kh->logUser($user,$pass);// trả là array
        if($login)
        {
            //nếu đăng nhập thành công, thì tạo session để lưu thông tin khách hàng
            $_SESSION['idkh']=$login['idkh'];
            $_SESSION['user']=$login['user'];
            echo '<script> alert("Đăng nhập thành công");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=main"/>';
        }
        else
        {
            echo '<script> alert("Đăng nhập không thành công");</script>';
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=dangnhap"/>';
        }
    }
    break;
    case 'dangxuat':
        unset($_SESSION['idkh']);
        unset($_SESSION['user']);
        echo '<script> alert("Đăng xuất thành công");</script>';
        echo '<meta http-equiv="refresh" content="0;url=./index.php"/>';
}
?>