<?php
    $act="forget";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'forget':
            include_once "./Views/forgetpassword.php";
            break;
        
        case 'forget_action':
            // nhận email về
            if(isset($_POST['submit_email']))
            {
                $email=$_POST['email'];//huuthuan110804@gmail.com
                $_SESSION['email']=array();
                // kiểm tra xem email này có tồn tại hay không
                $kh=new user();
                $checkemail=$kh->checkEmail($email)->rowCount();
                if($checkemail>0)
                {
                    // tạo code cấp cho email
                    $code=random_int(10000,100000);
                    // tạo đối tượng
                    $item=array(
                        'id'=>$code,
                        'email'=>$email,
                    );
                    // add vào session
                    $_SESSION['email'][]=$item;
                    // tiến hàng gửi mail
                    $mail = new PHPMailer();
                    $mail->CharSet =  "utf-8";
                    $mail->IsSMTP();
                    // enable SMTP authentication
                    $mail->SMTPAuth = true;                  
                    // GMAIL username to:
                    // $mail->Username = "php22023@gmail.com";//
                    $mail->Username = "huuthuan110804@gmail.com";//
                    // GMAIL password
                    // $mail->Password = "php22023ngoc";
                    $mail->Password = "kxws tlbl pjob ipjx";//Phplytest20@php
                    $mail->SMTPSecure = "ssl";  // ssl
                    // sets GMAIL as the SMTP server
                    //  $mail->Host = "mail.domain.com";
                   $mail->Host = "smtp.gmail.com";
                    // set the SMTP port for the GMAIL server
                    $mail->Port = "465";// 465
                    $mail->From='huuthuan110804@gmail.com';
                    $mail->FromName='Đỏ Thuận';
                    // $getemail là địa chỉ mail mà người nhập vào địa chỉ của họ đã đăng ký trong trang web
                    $mail->AddAddress($email, 'reciever_name');
                    $mail->Subject  =  'Reset Password';
                    $mail->IsHTML(true);
                    $mail->Body    = 'Cấp lại mã code '.$code.'';
                    if($mail->Send())
                    {
                        echo '<script> alert("Check Your Email and Click on the 
                        link sent to your email");</script>';
                        include "./View/resetpw.php";
                    }
                    else
                    {
                        echo "Mail Error - >".$mail->ErrorInfo;
                        include "./Views/forgetpassword.php";
                    }
                    // include "./View/resetpw.php";
                   
// echo !extension_loaded('opentls')?"Not Available":"Available";
                }
                else
                {
                    echo '<script> alert("Địa chỉ mail ko tồn tại");</script>';
                    include "./Views/forgetpassword.php";
                }
                
            }
            break;
            ///$_SESSION['email]=array('id':59829,email:huynhhoang2024@gmail.com)
            // 59829
        }
?>