<?php

function ajaxReply($reply) {
    if (isset($_POST['javascript'])) {
        echo $reply;
        exit;
    }
}

session_start();
$referer = $_SERVER['HTTP_REFERER'];
if (!isset($_POST['Name']) || !isset($_POST['Email']) || !isset($_POST['message'])) {
    ajaxReply("exception");
    header("Location: $referer");
    return;
} else {
    //Remember to sanitize all fields
    $name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    //Make sure all fields are filled
    //If a field isn't filled
    //Send back all the fields
    //and show error that states that all fields must be filled
    if (empty($name) || empty($email) || empty($message)) {
        ajaxReply("emptyField");
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['message'] = $message;
        //also navigate to the form for the user
        header("Location: $referer#formAnchor");
        return;
    } else {
        //If all is well, send mail to me and navigate to the form
        $message = "Name: $name\n\r";
        $message .= "Email: $email\n\r";
        $message .= "Message: $message\n\r";
        $message = wordwrap($message, 70);
        $headers = "From: $email\r\n";
        $headers .= 'Content-Type: text/plain; charset=utf-8';
        mail('victorskywatch@gmail.com', 'Mail from user at virock.com.ng', $message, $headers);
        //Show confirmation that we've received the message
        ajaxReply("success");
        header("Location: $referer?success=true#formAnchor");
        return;
    }
}

