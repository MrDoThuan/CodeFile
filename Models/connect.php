<?php 
class connect{
    //Thuộc tính
    var $db=null;
    //hàm tạo được gọi khi new 1 dối tượng ( có 2 loại hàm tào là đối số và không đối số)
    function __construct()
    {
        $dsn='mysql:host=localhost;dbname=miaoi';
        $user='root';
        $pass=''; // Nếu xài XAMP, WAMP, laragon thì pass='';
    // Kết nối dựa vào class PDO
    try{
        $this-> db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
        // echo 'Kết nối thành công';
    } catch(\Throwable $th){
        //Throw $th
        echo 'Kết nối không thành công';
        echo $th;
    }
    }
        //Phuong thức truy vấn trả ra NHIỀU row
        function LayDS($select)
        {
            $result=$this->db->query($select); //this->db->query(select * form hanghoa);
            return $result; //trả về 1 table
        }
        // Phương thức trả về 1 row
        function LaySP($select) {
            $results=$this->db->query($select); //$this->db->query(select * from hanghoa)
            $result=$results->fetch(); // $result là array chỉ chứa 1 dòng, [mahh: 1,tênhh: giày....]
            return $result;
        }
        //Câu lệnh insert, update, delete ai làm? EXEC làm
        function exec($query)
        {
        $result=$this->db->exec($query);
        return $result;
        }
}
?>