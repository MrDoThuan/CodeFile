<?php
if(isset($_SESSION['idkh']))
{
    $idkh=$_SESSION['idkh'];
    $masp=$_POST['txtmahh'];
    $content=$_POST['comment'];
    //Tiến hành insert vào database
    $bl= new binhluan();
    $bl->BinhLuan($idkh,$masp,$content);
}
echo '<meta http-equiv="refresh" content="0;url=../index.php?action=sanpham&MM=sanphamchitiet&id='.$masp.'">';
?>