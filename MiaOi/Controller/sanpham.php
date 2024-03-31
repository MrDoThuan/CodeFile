<?php
    //Controller điều phối đến những view khác nhau dựa vào 1 biến
    // đặt tên là $MM
$MM= 'miamenu';
if(isset($_GET['MM']))
{
    $MM=$_GET['MM'];// miacoffe
}
switch($MM)
{
    case 'miamenu':
        include_once "./Views/sanpham.php";
        break;
    case 'miacoffe':
        include_once "./Views/sanpham.php";
        break;
    case 'sanphamchitiet':
        include_once "./Views/sanphamchitiet.php";
    break;
    case 'timkiem':
        include_once "./Views/sanpham.php";
        break;
}
?>