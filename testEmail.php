<?php

$mailto = "mirzashah2014@gmail.com";
$subject = "Test Mail";
$body = "Hi, this is another test message";
$headers = "From: mirzashah2014@gmail.com";

$sent = mail($mailto, $subject, $body, $headers);

if ($sent) {
    echo "Message sent successfully\n";
} else {
    echo "Message not sent";
}
