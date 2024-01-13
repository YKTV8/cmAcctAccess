<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;
    
    public function __construct($userId,$userUid){
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    public function defaultProfileInfo(){
        $profileAbout = "Hello Parents of";
        $profileTitle = "Gracelynn" . $this->userUid;
        $profileText = "Check on your child's supplies and daily activity!";
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle, $introText) {
// error handlers
        if($this->emptyInputCheck($about, $introTitle, $introText)== true ){
            header("locations: ../profilesettings.php?error=emptyinput");
            exit();
        }
        // error handers stop Update profile info
        $this->setProfileInfo($about, $profileTitle, $profileText, $this->userId);

    }

    private function emptyInputCheck($about, $introTitle, $introText){
        $result;
        if(empty($about) || empty($introTitle) || empty($introText)){
            $result = true;

        } else {
            $result = false;
        }
        return $result;

    }
    
}