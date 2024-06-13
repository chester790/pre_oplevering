<?php
session_start();

if (!isset($_SESSION['email']) ||
    $_SESSION['IP_ADDRESS'] !== $_SERVER['REMOTE_ADDR'] ||
    $_SESSION['USER_AGENT'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_unset();
    session_destroy();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
}
$_SESSION['LAST_ACTIVITY'] = time();
?>
