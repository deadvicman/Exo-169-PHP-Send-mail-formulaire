<?php
$mail = $_POST['mail'] ;
$message = $_POST['message'] ;
$subject = 'Object';
$message = substr($_POST['message'], 0, 500);

if (isset($_POST['mail']) && isset($_POST['message'])){
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        mail($mail, $subject, $message);
    } else {
        echo 'Adresse email, invalide';
    }
}
else{
    echo 'Une erreur est survenu..';
}