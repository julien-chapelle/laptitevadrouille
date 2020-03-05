<?php
//RECAPTCHA
if (isset($_POST["g-recaptcha-response"]) && empty($arrayError)) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6LcJ9t4UAAAAANtPuz8Ar41nbB8RXsvoAekyAJAV',
        'response' => $_POST["g-recaptcha-response"]
    );
    $options = array(
        'http' => array(
            'header' => 'Content-Type: application/x-www-form-urlencoded\r\n',
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    if ($captcha_success->success == false) {
        $arrayError['reCaptcha'] = 'Vous êtes un robot ! Stop !';
    } else if ($captcha_success->success == true) {
        $arrayValid['reCaptcha'] = 'Vous n\'êtes pas un robot !';
    }
}
?>