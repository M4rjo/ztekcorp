<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "loja");
$con = mysqli_connect(HOST,USER,PASS);
$banco = mysqli_select_db($con, DB);
?>