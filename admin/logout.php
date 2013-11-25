<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["user"]);
session_destroy();
header("Location: index.php");
?>