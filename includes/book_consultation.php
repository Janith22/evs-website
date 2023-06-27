<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//echo !extension_loaded('openssl')?"Not Available":"Available";
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';


if(isset($_POST)){

    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_contact = $_POST['customer_contact'];
    $visa_type = $_POST['visa_type'];
    $date_of_preference = $_POST['date_time_preference'];
    $consultation_method = $_POST['consultation_method'];
    $payment_method = $_POST['payment_method'];
    $special_requests = $_POST['special_requests'];


    // ini_set("SMTP", "anushkaduwolka123@gmail.com");
    // ini_set("sendmail_from", "anushkaduwolka123@gmail.com");

    // $fromEmail = 'anushkaduwolka123@gmail.com';
    // $toEmail = 'anushkaduwolka123@gmail.com';

    // $fromEmail = 'info@mbslinsurance.lk';
    // $toEmail = 'anushkaduwolka123@gmail.com';

    $emailSubject = 'Book Consultation Submitted by '.$customer_name;

 $htmlContent = '<h2>Book Consultation</h2>
            <h4>Name</h4><p>'.$customer_name.'</p>
            <h4>Customer E-Mail</h4><p>'.$customer_email.'</p>
            <h4>Contact Number</h4><p>'.$customer_contact.'</p>
            <h4>Visa Type</h4><p>'.$visa_type.'</p>
            <h4>Date & Time Of Preference</h4><p>'.$date_of_preference.'</p>
            <h4>Consultation Method</h4><p>'.$consultation_method.'</p>
            <h4>Payment Method</h4><p>'.$payment_method.'</p>
            <h4>Special Requests</h4><p>'.$special_requests.'</p>';


    // Set content-type header for sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers
    // $headers .= 'From: '.$name.'<'.$fromEmail.'>'. "\r\n";

    // reCapture Settings
    /*    $secretKey  = '6LfxgQQaAAAAAEouhNMGCae2pDvUTOzq-oKjbZTD';
        $token = $_POST['g-token'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='. $secretKey . '&response=' .$token. '&remoteip=' .$ip;
        $request = file_get_contents($url);
        $response = json_decode($request);*/

    //   print_r($response);

    /*if($response->success){*/
    // echo 'Validation Successfull';
    $statusMsg = 'Validation Successfull';
    $msgClass = 'succdiv';

    // create a new object
    $mail = new PHPMailer(true);



    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'evslankan@gmail.com';
    $mail->Password = 'dgeljaptdpurczos';                  // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


    $mail->setFrom('evslankan@gmail.com');
    $mail->addAddress('Info@evs.lk');
    $mail->addCC('marketing@evs.lk');

    $mail->Subject = $emailSubject;

    $mail->isHTML(TRUE);
    $mail->Body = $htmlContent;


// send the message

    if(!$mail->send()){
        $statusMsg = 'Your contact request submission failed, please try again.';
        $msgClass = 'errordiv';
        echo json_encode('Mailer Error: ' . $mail->ErrorInfo) ;
        echo json_encode('<h3 class=\"success\" style=\"color: white\">Mailer Error: \"'.$mail->ErrorInfo.'\"</h3>') ;
    } else {
        $statusMsg = 'Your contact request has been submitted successfully !';
        $msgClass = 'succdiv';
        echo json_encode('<h3 class=\"success\" style=\"color: white\">Message has been sent</h3>') ;

        //  echo 'Message has been sent';
    }

    // // Send email
    // if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
    //     $statusMsg = 'Your contact request has been submitted successfully !';
    //     $msgClass = 'succdiv';
    // }else{
    //     $statusMsg = 'Your contact request submission failed, please try again.';
    //     $msgClass = 'errordiv';
    // }
    /* } else {
         // echo 'Validation faild';

         $statusMsg = 'Validation failed';
         $msgClass = 'errordiv';
     }*/
}

?>