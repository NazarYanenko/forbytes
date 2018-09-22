<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require 'autoloader.php';

use Letters\WelcomeLetter;
use Letters\ComebackLetter;


$welcomeLetters = new WelcomeLetter();
$mail = new Mailer($welcomeLetters);
$mail->send();

$comebackLetters = new ComebackLetter();
$mail = new Mailer($comebackLetters);
$mail->send();



