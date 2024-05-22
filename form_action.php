<?php

$email = $_POST['mail'];
$name = $_POST['username'];
$subject = $_POST['option'];
$message = $_POST['message'];

if (empty( $email ) || empty( $name ) || empty( $subject ) || empty( $message )){

    header('Location: /portfolio/index.php?error=1');

}
if (!filter_var( $email , FILTER_VALIDATE_EMAIL )){

    header('Location: /portfolio/index.php?error=2');

}

header('Location: /portfolio/index.php?success=1');