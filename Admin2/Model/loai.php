<?php
class loai{
    function getLoai()
    {
        $db=new connect();
        $select="select * from loai";
        $result=$db->getList($select);
        return $result;
    }
    function getSize()
    {
        $db=new connect();
        $select="select * from size";
        $result=$db->getList($select);
        return $result;
    }
}
?>