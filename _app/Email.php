<?php


namespace  Notification;
use  PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Email {

    private $mail = \stdClass::class;


    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'smtpi.kinghost.net';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = 'contato@data-r.com.br';                     // SMTP username
        $this->mail->Password   = 'rafa200891';                               // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->Port       = 465;
        $this->mail->CharSet    = 'utf-8';// TCP port to connect to
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('contato@data-r.com.br', 'Rafael Tôrres 2');

    }

    public function  sendEmail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName){
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();

        } catch (\Exception $e){


            echo " Erro ao enviar o E-mail:  {$this->mail->ErrorInfo} {$e->getMessage()} ";
        }


        echo "Email ok!";
    }



}