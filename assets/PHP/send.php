<?php
session_start();

$Name = $_SESSION['name'];
$Email = strtolower($_SESSION['email']);
$Message = strtoupper($_SESSION['message']);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
// require './PHPMailer/Exception.php';
// require './PHPMailer/SMTP.php';
// require './PHPMailer/Exception.php';
require_once __DIR__ . './PHPMailer/PHPMailer.php';
require_once __DIR__ . './PHPMailer/SMTP.php';
require_once __DIR__ . './PHPMailer/Exception.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rockcoders0456@gmail.com';                     //SMTP username  (sender)
    $mail->Password   = 'itvq rnzl ggnc gevx';                               //SMTP password  (sender)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('rockcoders0456@gmail.com', 'Rock Coders');
    $mail->addAddress("$Email", "$Name");     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Welcome:$Name";
    $mail->Body    = "<b>You commented at our website:</b>$Message";

    $mail->send();
    echo 'Message has been sent';
    ?>
    <script>
        alert("Messsage sent successfully and thanks for visting our portfolio !");
        window.location.href = 'http://localhost/Frist_Portfolio/index.html'
    </script>
    <?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>