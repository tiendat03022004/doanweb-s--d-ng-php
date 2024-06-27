<?php
  session_start();
  
$conn = mysqli_connect('localhost','root','','users');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $query = "SELECT * FROM login_register WHERE email = '$email'";
    $result = mysqli_query($conn, $query);


    if (mysqli_num_rows($result) > 0) {

        $confirmationCode = substr(md5(rand(0,999999)),0,8);
        $updateQuery = "UPDATE login_register SET password = '$confirmationCode' WHERE email = '$email'";
        mysqli_query($conn, $updateQuery);
       
        require "D:\doan2\PHPMailer-master\PHPMailer-master\src\PHPMailer.php"; 
        require "D:\doan2\PHPMailer-master\PHPMailer-master\src\SMTP.php"; 
        require "D:\doan2\PHPMailer-master\PHPMailer-master\src\Exception.php"; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug =0 ; //0,1,2: chế độ debug
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'tiendat03022004@gmail.com'; // SMTP username
            $mail->Password = 'maef icbg rpgb ufjj';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to                
            $mail->setFrom('tiendat03022004@gmail.com', 'Ngô Tiến Đạt' ); 
            $mail->addAddress($email); 
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi lại mật khẩu';
            $noidungthu = 'Yên cầu lấy lại mật khẩu từ website của bạn, mật khẩu của bạn là '.$confirmationCode.' '; 
            $mail->Body = $noidungthu;
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Đã gửi mail xong';
        } catch (Exception $e) {
            echo 'Error: ';
        }
if($result==true){
    header("location:/dangnhap (1)/lamlaimk.html");
    exit();
}
       
   
      
       
    } else {
        echo "Địa chỉ email không tồn tại trong hệ thống.";
        echo'<script>
        setTimeout(function(){
            window.location.href="/dangnhap (1)/forgotpass.html";
        },50
        </script>';
    }
}
?>