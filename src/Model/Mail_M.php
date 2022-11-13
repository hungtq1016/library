<?php 
include "../PHPMailer/src/PHPMailer.php";
include "../PHPMailer/src/Exception.php";
include "../PHPMailer/src/POP3.php";
include "../PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mail_M{
    public function create($target_mail,$header,$body)
    {
        $mail = new PHPMailer(true);   
        try {
            $mail->CharSet = 'UTF-8';
            //Server settings
            $mail->SMTPDebug = 0;                                 // Bật thông báo lỗi nếu như bị sai cấu hình
            $mail->isSMTP();                                      // Sử dụng SMTP để gửi mail
            $mail->Host = 'smtp.gmail.com';                   // Server SMTP của mình
            $mail->SMTPAuth = true;                               // Bật xác thực SMTP
            $mail->Username = 'leyholdbrook@gmail.com';                 // Tài khoản email
            $mail->Password = 'rancisvnmfhojafc';                           // Mật khẩu email
            $mail->SMTPSecure = 'tls';                            // Tắt SSL /TLS
            $mail->Port = 587;                                                                                                              // Cổng kết nối SMTP sẽ là 25
        
            //Recipients
            $mail->setFrom('leyholdbrook@gmail.com', 'Thư Viện trường CĐ CNTT');           // Địa chỉ email và tên người gửi
            $mail->addAddress($target_mail, '');     // Địa chỉ người nhận
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $header;                                                 // Tiêu đề
            $mail->Body    = $body; // Nội dung
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;}
    }
}
?>