<?php
session_start();
session_destroy();
header("Location: ../BasisData/FormLogin/LoginForm.php");
?>