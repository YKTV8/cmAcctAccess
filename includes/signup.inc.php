<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    # code... grabs data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    ##$name = $_POST["name"];htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
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