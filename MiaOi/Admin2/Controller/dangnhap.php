<?php
$act="dangnhap";
if(isset($_GET["act"]))
{
    $act=$_GET["act"];
}
switch($act)
{
    case 'dangnhap':
        include_once "./View/dangnhap.php";
    break;
}
?>