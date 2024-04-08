<?php
session_start();
include 'config.php';

session_unset();
session_destroy();

header('location:admin_login.php');
exit;
?>