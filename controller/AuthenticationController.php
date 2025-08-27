<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once __DIR__ . '/../model/Authentication.php';
include_once __DIR__ . '/../vendor/PhpMailer/src/Exception.php';
include_once __DIR__ . '/../vendor/PhpMailer/src/PHPMailer.php';
include_once __DIR__ . '/../vendor/PhpMailer/src/SMTP.php';

class AuthenticationController
{
    private $auth;
    function __construct()
    {
        $this->auth = new Authentication();
    }

    public function createUser($name, $email, $password)
    {
        return $this->auth->createUser($name, $email, $password);
    }

    public function getUsers()
    {
        return $this->auth->getUsers();
    }

    public function getUser($id)
    {
        return $this->auth->getUser($id);
    }

    public function otpVerify($email)
    {
        $otp = rand(1000, 9999);

        $mailer = new PHPMailer(true);
        $mailer->isSMTP();
        $mailer->Host = getenv('MAIL_HOST');
        $mailer->SMTPAuth = true;
        $mailer->SMTPSecure = 'tls';
        $mailer->Port = getenv('MAIL_PORT');

        $mailer->Username = getenv('MAIL_USERNAME');
        $mailer->Password = getenv('MAIL_PASSWORD');

        $mailer->setFrom(getenv('MAIL_FROM'), getenv('MAIL_FROM_NAME'));
        $mailer->addAddress($email);

        $mailer->isHTML(true);
        $mailer->Subject = "Your account registration is in progress.";
        $mailer->Body = 'Your OTP code is ' . $otp . '.';

        if ($mailer->send()) {
            return $otp;
        }
    }
}
