<?php
// Xóa giỏ hàng bằng unset
// unset($_SESSION['cart']);
//Xem người dùng có giỏ hàng hay chưa, nếu chưa có thì tạo giỏ hàng
if(!isset($_SESSION['cart']))
{
    //Tọa giỏ hàng
    $_SESSION['cart']=array();//chứa nhiều món hàng
}
$act="giohang";
if(isset($_GET['act']))
{
    $act=$_GET['act'];
}
switch($act)
{
    case "giohang":
        include_once "./Views/giohang.php";
    break;

    case "giohang_action":
        // Truyền qua id,size,topping,số lượng
        $id=0;
        $size=0;
        $soluong=0;
        if(isset($_POST['mahh']))
        {
            $id=$_POST['mahh'];
            $size=$_POST['size'];
            $soluong=$_POST['soluong'];
            //Controller yêu cầu adđ thông tin này vào trong giỏ hàng
            //Ai làm? Models làm
            $gh=new giohang();
            $gh->addCart($id,$size,$soluong);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
    break;
    case 'giohang_xoa':
        //Nhận Key
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            unset($_SESSION['cart'][$id]);
        }
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
    break;
    case 'update_gh':
        //Nhận giá trị
        if(isset($_POST['newqty']))
        {
            $newqty= $_POST['newqty']; //[0:2, 1:4]
            //Duyệt qua giỏ hàng, hàng nào mà có số lượng khác với newqty thi tiến hành update
            foreach($newqty as $key => $value)
            {
                if($_SESSION['cart'][$key]['soluong'] != $value)
                {
                    $gh= new giohang();
                    $gh->updateHH($key,$value);
                }
            }
        }
        echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
    break;
}
?>