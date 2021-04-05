<?php

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$phone = $_POST['phone'];
$mail = $_POST['email'];

$first_name = strip_tags($first_name);
$last_name = strip_tags($last_name);
$phone = strip_tags($phone);
$mail = strip_tags($mail);

printf("Ви ввели такі дані:<br>");
printf("%s %s<br>%s<br>%s", $first_name, $last_name, $phone, $mail);

?>