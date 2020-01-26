<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $mailFrom = $_POST["email"];
    $message = $_POST["subject"];

    $mailTo = "contact@nicotanne.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-Mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}