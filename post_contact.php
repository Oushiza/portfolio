<?php
$errors = [];

if (!array_key_exists('name', $_POST) ||  $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('email', $_POST) ||  $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if (!array_key_exists('message', $_POST) ||  $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if (!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php#contact');
}else{
    $_SESSION['success'] = 1;
    $headers = 'From: ' .  $_POST['email'];
    mail('kevinlay.fr@gmail.com', 'Formulaire de contact' . $_POST['name'], $_POST['message'], $headers);
    header('Location: index.php#contact');
}