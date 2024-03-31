<?php
$dk="dangki";
if(isset($_GET["dk"]))
{
    $dk=$_GET["dk"];
}
switch($dk){
    case 'dangki':
        include_once "./Views/dangki.php";
        break;
    case 'dangki_action':
        //nhận thông tin
        $hoten='';
        $diachi='';
        $sdt='';
        // $gioitinh='';
        $email='';
        $user='';
        $pass='';
        if(isset($_POST["submit"]))
        {
            $hoten=$_POST["txthoten"];
            $address=$_POST["txtaddress"];
            $email=$_POST["txtemail"];
            $user=$_POST["txtuser"];
            $pass=$_POST["txtpass"];
            $phone=$_POST["txtphone"];
            // $gioitinh=$_POST["radio"];
            //mã hóa pass
            $saltF="DT117#!";
            $saltL="HT22&&@";
            $passnew=md5($saltF.$pass.$saltL);
            //controller yêu cầu đem thông tin lưu vào database, ai làm? Model làm
            // Trước khi chèn cần kiểm tra UserName và email có tồn tại trong database hay chưa
            $kh= new user();
            $check=$kh->checkUser($user,$email)->rowCount();
            if($check>=1)
            {
                echo '<script> alert("Tên đăng nhập hoặc Email đã tồn tại");</script>';
                include_once "./Views/dangki.php";
            }
            else
            {
                //insert vào database
                $iskh=$kh->themUser($hoten,$address,$email,$user,$pass,$phone);
                if($iskh!==false)
                {

                    echo '<script> alert("Đăng kí thành công");</script>';
                    include_once "./Views/main.php";
                }
                else
                {

                    echo '<script> alert("Đăng kí thất bại");</script>';
                    include_once "./Views/dangki.php";
                }
            }
        }
        break;
}
?>