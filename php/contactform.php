<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject $_POST['subject'];
    $mailFrom $_POST['mail'];
    $messege = $_POST['message'];

    $mailTo = "kamseest@hotmail.dk"
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from".$name.".\n\n".$message;

    mail ($mailTo, $subject, $txt, $headers);
    header ("Location: contactform.php?mailsend");
}