<?php

class supplies extends Dbh{

    protected function getSupplyList($userBrand, $usersSize,$usersQuantity){
        $stmt = $this->connect()->prepare('SELECT users_brand, users_size, users_quantity FROM supplies WHERE users_uid = ? OR users_email = ?;');

        if(!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: supplies.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: supplies.php?error=notfound");
            exit();
        }
        $supplyData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $supplyData;
        
    }
    protected function setNewSupplyInfo($userId, $usersBrand, $usersSize, $usersQuantity) {
        $stmt = $this->connect()->prepare('UPDATE supplies SET users_brand = ?, users_size = ?, users_quantity = ?  WHERE users_id = ?;');

        if(!$stmt->execute(array($usersId, $usersBrand, $usersSize, $usersQuantity))) {
            $stmt = null;
            header("location: supplies.php?error=stmtfailed");
            exit();
        }

            $stmt = null;
    }
    protected function setSupplyInfo($userId, $usersBrand, $usersSize, $usersQuantity) {
        $stmt = $this->connect()->prepare('INSERT INTO supplies (users_id, users_brand, users_size, users_quantity) VALUES (?,?,?,?);');

        if(!$stmt->execute(array($uid, $brand, $size, $quantity))) {
            $stmt = null;
            header("location: supplies.php?error=stmtfailed");
            exit();
        }

            $stmt = null;
}
}