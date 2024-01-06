<?php
session_start();
session_unset();
session_destroy();

// go back to login screen
header("location: ../header.php");