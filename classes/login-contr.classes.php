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

    $this->setUser($this->uid, $this->pwd, $this->email);

    }

    private function emptyInput(){
        $result;
        if (empty($this->uid) || empty($this->pwd) || empty($this->name)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

}