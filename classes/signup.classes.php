<?php

class signup extends Dbh{

    protected function setUser($uid, $email, $pwd){
        $stmt = $this->connect()->prepare("INSERT INTO users (users_uid,users_pwd, users_email) VALUES(?, ?, ?)");

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../header.php?error=stmtfailed");
            exit();
        }
        
        $stmt = null;
    }

    protected function checkUser($uid, $email){
        $stmt = $this->connect()->prepare("SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;");
// this is a prepared statement that is ready to execute into the DBH to receieve a result from.
        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location: ../header.php?error=stmtfailed");
            exit();
        }

        $resultCheck;

        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else{
            $resultCheck = true;
        }
        return $result;
    }
    
}