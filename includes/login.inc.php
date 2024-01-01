<?php

if (isset($_POST["submit"])) {

    # code... grabs data
    $uid = $_POST["uid"];
    // $email = $_POST["email"];
    $pwd = $_POST["pwd"];
 
    # code... Instantiate login class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new loginContr($uid, $pwd );
    # code... Running error handles and users for login 
    $login->loginUser();

    # code... bring them back to the front page
    header("Location: ../header.php?error=none");

    //12/31 1.05.23 marker on
}