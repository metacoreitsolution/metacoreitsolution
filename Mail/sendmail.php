<?php
require 'smtp/PHPMailerAutoload.php';

class SendMail
{
    public $SenderEmail = "hitixa.bhuva@uniqueconsumerservices.com";
    public $SenderEmailPassword = "1f1UOc{3U*64";
    public $ReciverEmail = "info@aaryantradelink.com";
    public $Subject = "Get In Touch";
    public $Body = "hello";

    public function sendMail()
    {
        $inputData = json_decode(file_get_contents('php://input'), true);
        // $subject = isset($inputData['Subject']) ? $inputData['Subject'] : '';
        $body = isset($inputData['Body']) ? $inputData['Body'] : 'nothing';


        $mail = new PHPMailer();


        $mail->SMTPDebug  = 3;
        $mail->IsSMTP(); 
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "216.10.241.228";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->CharSet = 'UTF-8';
   
        $mail->Username = $this->SenderEmail;
        $mail->Password = $this->SenderEmailPassword;
        $mail->setFrom($this->SenderEmail, 'Your Name or
         Company'); // Add a name for better identification
        $mail->Subject = $this->Subject;
        $mail->Body = $body;
        $mail->addAddress($this->ReciverEmail);
        
        
        // Optional: Configure SSL options
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];
        
        die($mail->send());
        try {
            if (!$mail->send()) {
                // Handle failure
                echo json_encode([
                    'status' => false,
                    'message' => 'Message could not be sent......',
                    'error' => '$mail->ErrorInfo . $body'.$body,
                ]);
            } else {
                // Handle success
                echo json_encode([
                    'status' => true,
                    'message' => 'Message sent successfully 111111',
                ]);
            }
        } catch (Exception $e) {
            echo json_encode([
                'status' => false,
                'message' => 'Message could not be sent. Mailer Error.',
                'error' => $e,
            ]);
        }
    }
}

// Instantiate the class and call the method
$mailer = new SendMail();
$mailer->sendMail();
?>