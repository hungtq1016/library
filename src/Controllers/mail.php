<?php
include "../PHPMailer/src/PHPMailer.php";
include "../PHPMailer/src/Exception.php";
include "../PHPMailer/src/POP3.php";
include "../PHPMailer/src/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Khai báo hàm

try {

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
    $mail->setFrom('leyholdbrook@gmail.com', 'Tran Hung');           // Địa chỉ email và tên người gửi
    $mail->addAddress('hungbanghung@gmail.com', 'Hung Tran');     // Địa chỉ người nhận

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';                                                 // Tiêu đề
    $mail->Body    = 'This is the HTML message body in bold!'; // Nội dung

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;}
?>