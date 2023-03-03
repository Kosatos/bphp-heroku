<?php
session_start();
unset($_SESSION["name"]);
header('Location: http://localhost:8000/index.php');