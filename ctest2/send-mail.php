<?php

    $to = "my-email@mydomain.com";

    if($_POST){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        mail($to, "New message from " . $name, $message, "From: $email" );
    }
?>
