<?php
session_start();
$name = $_POST['name'];
$_SESSION['name'] = $name;
header('Location: http://localhost:8000/index.php');