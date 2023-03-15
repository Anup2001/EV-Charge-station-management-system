<?php
session_start();

session_unset(); // freezes all current session
session_destroy();

header("location: login.php");
exit;
?>