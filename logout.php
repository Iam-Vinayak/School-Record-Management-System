<?php
session_start();

session_unset();
header('location:http://localhost/sms/index.php');

?>