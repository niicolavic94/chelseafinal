<?php
session_start();
require 'controllers/authController.php';

$authController = new AuthController();
$authController->login();


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            $authController->register();
            break;
        case 'login':
            $authController->login();
            break;
        case 'reset':
            $authController->resetPassword();
            break;
        case 'logout':
            $authController->logout();
            break;
        default:
            $authController->login();
            break;
    }
} else {
    $authController->login();
}
?>