<?php
session_start();
if (!isset($_SESSION['codigo']))
    header("location: control.php");
?>