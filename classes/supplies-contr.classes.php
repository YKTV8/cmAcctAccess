<?php

class SuppliesInfoContr extends SuppliesInfo{

    private $userID;
    private $userUid;

    public function __construct($userId,$userUid){
        $this->userId = $userId;
        $this->userUid = $userUid;
    }
}
