<?php
try {
    if (isset($_POST["_token"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $reason = $_POST["reason"];
        $address = $_POST["address"];

        $mailer = 'avisos@dc.ar';

        $header = 'From: ' . $mailer . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $message = "Mensaje enviado por " . $name . "\r\n";
        $message .= "e-mail: " . $email . " \r\n";
        $message .= "en razon de " . $reason . " \r\n";

        if($address != ''){
            $message .= "con direccion en " . $address . " \r\n";
        }
        
        $message .= "Enviado el " . date('d/m/Y', time());

        $to = 'info@dc.ar';
        $toPrueba = 'pruebas@dc.ar';
        $subject = 'Consulta por sitio web';

        mail($to, $subject, utf8_decode($message), $header);
        mail($toPrueba, $subject, utf8_decode($message), $header);

        unset($_POST["name"]);
        unset($_POST["email"]);
        unset($_POST["reason"]);
        unset($_POST["address"]);

        $user_msg = 'mail-ok';
    }else {
         // not autorized
        header("Location:index.php");
        die();
    }
} catch (\Throwable $th) {
    $user_msg = 'mail-problem';
}

header("Location:index.php?message=$user_msg");
?>