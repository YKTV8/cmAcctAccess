<?php

class signupContr extends signup {

    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;
    private $name;
    // variable below are grabbed from the data the users enters in. Not from the properies above. 
    public function __construct($uid, $pwd, $pwdRepeat, $email, $name){
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->name = $name;
        $this->email = $email;
    }

    public function signupUser(){
        if (!$this->emptyInput() == false) {
            header("location: ../header.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
        header("location: ../header.php?error=username");
        exit();
        }
    if (!$this->invalidEmail() == false) {
        header("location: ../header.php?error=email");
        exit();
    }
    if (!$this->pwdMatch() == false) {
        header("location: ../header.php?error=mismatchpwd");
        exit();
    }
    if (!$this->uidTakenCheck() == false) {
        header("location: ../header.php?error=uidtaken");
        exit();
    }

    $this->setUser($this->uid, $this->pwd, $this->email);

    }

    private function emptyInput(){
        $result;
        if (empty($this->uid) || empty($this->pwd)  || empty($this->pwdRepeat) || empty($this->name) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid() {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        } 
        else {
   
            $result = true;
        }    
        return $result;
        }

    private function invalidEmail() {

        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } 
        else {
            $result = true;
        }    
        return $result;
        }

    private function pwdMatch() {

        $result;
        if ($this->pwd !== $this->pwdRepeat) {
            $result = false;
        } 
        else {
            $result = true;
        }    
        return $result;
        }

    private function uidTakenCheck() {

        $result;
        if (!$this->checkUser($this->uid, $this->email)) {
            $result = false;
        } 
        else {
            $result = true;
        }    
        return $result;
        }
}