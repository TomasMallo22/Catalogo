<?php 

require_once(BASE_DIR.'vendor/autoload.php');

class ContactoBusiness {

    function sendMail($datos = array()) {
        // Create the Transport
        $transport = (new Swift_SmtpTransport(SMTP_SERVER, SMTP_PORT, 'ssl'))
            ->setUsername(SMTP_USER)
            ->setPassword(SMTP_PASSWORD);

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message())
            ->setSubject('Solicitud de contacto')
            ->setFrom([$datos['email'] => $datos['nombre']])
            ->setTo($GLOBALS['contactoReplayTo'])
            ->setBody($this->generateBody($datos))
            ->setContentType('text/html');

        // Send the message
        $result = $mailer->send($message);
    }

    function generateBody($datos){
        $mailBody = file_get_contents(BASE_DIR.$GLOBALS['mailTemplate']);
        foreach($datos as $campo => $valor){
            $mailBody = str_replace("{".$campo."}", $valor, $mailBody);
        }
        return $mailBody;
    }
}

?>