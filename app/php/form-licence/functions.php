<?php

function redirectWithError($error)
{
    $_SESSION['_form_form_error'] = $error;

    header('Location: '.$_SERVER['HTTP_REFERER']);
    echo "Error: ".$error;
    die();
}

function redirectSuccess()
{
    $_SESSION['_form_form_success'] = true;

    header('Location: '.$_SERVER['HTTP_REFERER']);
    echo "Your message was sent successfully!";
    die();
}
