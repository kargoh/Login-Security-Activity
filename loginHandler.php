<?php 
require_once 'header.php';
require_once 'Autoloader.php';
require_once 'SecurityService.php';

$attemptedLoginName = $_POST['username'];
$attemptedPassword = $_POST['password'];

echo "You tried to login with " . $attemptedLoginName . " and " . $attemptedPassword . "<br>";

$service = new SecurityService($attemptedLoginName, $attemptedPassword);
$loggedIn = false;
$loggedIn = $service->authenticate();

if($loggedIn = TRUE) {
    
    $_SESSION['principal'] = true;
    include "loginPassed.php";
} else {
    $_SESSION['principal'] = false;
    include "loginFailed.php";
}

?>