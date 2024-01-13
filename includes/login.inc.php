<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # code... grabs data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    // $email = $_POST["email"];
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
 
    # code... Instantiate login class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new loginContr($uid, $pwd);
    # code... Running error handles and users for login 
    $login->loginUser();

    # code... bring them back to the front page
    header("Location: ../header.php?error=none");

    //12/31 1.05.23 marker on
}