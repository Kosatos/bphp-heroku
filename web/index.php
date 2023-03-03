<?php

session_start();
$form = file_get_contents('./index.html');
if (isset($_SESSION['name']) && $_SESSION['name'] !== '') {
   echo 'Hello, ' . $_SESSION['name'] . "<br>";
   echo '<a href="exit.php">Выйти</a>'  . "<br>";
} else {
    echo $form;
}