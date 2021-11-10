<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// Load Composer's autoloader
/*require 'vendor/autoload.php';*/

// Instantiation and passing `true` enables exceptions

    if(isset($_POST['name']) && isset($_POST['email']))
    {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";


    $mail = new PHPMailer();

    //Server settings
                    // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'parkproject123@gmail.com';                     // SMTP username
    $mail->Password   = 'project2020!';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
   
   
   
    // Content
    $mail->isHTML(true); 
    $mail->setFrom($email, $name);   
    $mail->addAddress('parkproject123@gmail.com');     // Add a recipient
                                    // Set email format to HTML
    $mail->Subject = 'Customer Issue';
    $mail->Body    = "Email: " . $email . " <br> Message: <br>" . $message;
    

    if($mail->send()){
        $status = "success";
        $response = "Email is sent";
        header("Location: thank-you.html");
    }
    else
    {
        $status = "failed";
        $response = "Something went wrong: <br>" . $mail->ErrorInfo;
        header("Location: mail-error.html");
    }


    
    exit(json_encode(array("status" => $status, "response" => $response))); 

}

?>
