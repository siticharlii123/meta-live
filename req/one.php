<?php
session_start();

$uname = $_POST['uname'];
$_SESSION['uname'] = $uname;

header('Location: ../verif.php');
?>
