<?php

class loginContr extends login {

    private $uid;
    private $pwd;
    // variable below are grabbed from the data the users enters in. Not from the properies above. 
    public function __construct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    public function loginUser(){
        if (!$this->emptyInput() == false) {
            header("location: ../header.php?error=emptyinput");
            exit();
        }

    $this->getUser($this->uid, $this->pwd);

    }

    private function emptyInput(){
        $result;
        if (empty($this->uid) || empty($this->pwd)) {
            $result = false;
        } 
        else {
            $result = true;
        }
        return $result;
    }

}