<?php

if (isset($_POST["submit"])) {

    # code... grabs data
    $uid = $_POST["uid"];
    ##$name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
  #  $pwdRepeat = $_POST["pwdRepeat"];
    # code... Instantiate signup class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new signupContr($uid, $email, $pwd, $pwdRepeat);
    # code... Running error handles and users for signup 
    $signup->signupUser();

    # code... bring them back to the front page
    header("Location: ../header.php?error=none");

    //52:11
}