<?php session_start(); ?>

<?php
unset($_SESSION["uname"]);
unset($_SESSION["utype"]);

session_destroy();

header("location:index.php");


?>