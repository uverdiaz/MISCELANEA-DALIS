<?php
session_start();

session_destroy();

header("location: ../pedido.php");
exit();

?>