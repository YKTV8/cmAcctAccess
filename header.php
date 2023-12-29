
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Chae & Marie Solutions</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <video autoplay muted loop id="myVideo" src="/img/ballpit.mp4" type="video.mp4"></video>
    <div class="container">
        <div class="container_signupBox">
        <h2>Sign Up</h2>
        <section>
            <div class="loginBox">
                <form action="includes/signup.inc.php" method="post" novalidate>
                    <div class="nameContainer">                                                                                                                                                                                                                               <div class="uidContainer">
                        <label for="uid"></label>
                        <input type="text" id="email" name="uid" required placeholder="username">
                    </div>                                                                 
                        <label for="name"></label>
                        <input type="text" id="name" name="name" required placeholder="Name">
                    </div>
                    <br>
                    <div class="emailContainer">
                        <label for="email"></label>
                        <input type="text" id="email" name="email" required placeholder="Email">
                    </div>
                        <br>
                        <div class="passwordContainer">
                            <label for="password"></label>
                        <input type="password" id="password" name="pwd" required placeholder="Password">
                        </div>
                        <br>
                        <div class="passwordConfirmContainer">
                            <label for="passwordConfirm"></label>
                            <input type="password" name="pwdrepeat" required id="passwordConfirm" placeholder="Confirm Password">
                        </div>
                        <?php
                        if (isset($_SESSION["userid"])) {
                            echo "<li><a href='profile.php'>Profile page</a></li>";
                            echo "<li><a href='logout.php'>log out</a></li>";
                        } 
                        else{
                            // echo "<li><a href='signup.php'>Sign up</a></li>";
                            ##echo "<li><a href='login.php'>log in</a></li>";
                        }
                        ?>
                       
                        <div class="tapInButton">
                            <button type="submit" name="submit">Tap In</button>
                        </div>
                        &nbsp;
                        <br><br>
                        <a href="#">Forgot Password?</a>
                        <br>
                </form>
            </div>
        </div>
        <h4>OR</h4>
        <div class="container_loginBox">
        <h2>Log In</h2>
        <section>
            <div class="loginBox">
                <form action="./includes/login.inc.php" method="####" novalidate>

                <input type="text" name="uid" placeholder="Username/Email"> <br> <br>
                <input type="password" name="pwd" placeholder="Password..."> <br>
               
                        <div class="tapInButton">
                            <button type="Ssubmit" name="Ssubmit">Tap In</button>
                        </div>
                        &nbsp;
                        <br><br>
                        <a href="#">Forgot Password?</a>
                        <br>
                        <br>
                        <a href="./login.php">Already have an account? Login Now!</a>
                </form>
            </div>
            <!-- error listeners for log in -->
            <?php
            if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill in all fields </p>";
            }
            else if($_GET["error"] == "wronglogincombo"){
                echo "<p>Invalid entry, try again.</p>";
            }
        }
        ?>
        </section>
    </div>
    </div>
        <!-- php code for signup error listeners -->
        <?php
            if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p> Fill in all fields </p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p> Invalid user";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Invalid email </p>";
            }
            else if($_GET["error"] == "nomatch"){
                echo "<p>Passwords don't match. Try Again.</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p> Username has been taken. try again.</p>";
            }
            else if($_GET["error"] == "successful"){
                echo "<p> Successful login</p>";
            }
        }
        ?>
        </section>
    </div>
</body>
</html>