<?php

/*Write a function that returns the first part of an email address
example: david@drj.io
result: david */

function firstPartEmail() {
if(isset($_POST['email'])) {
$email = $_POST['email'];
$preEmail = explode("@", $email);
echo "<br><p>Your Email Prefix is: <em><u>" . $preEmail[0] . "</em></u><br>";
}
}
