<?php
namespace App;

use \PDO;

    class Validation
    {
        public $sql;
        
public function valider($ann_unique_id){

    $this->sql = "UPDATE annonce SET ann_est_valider = 1 WHERE annonce.ann_unique_id = '$ann_unique_id';";
    $this->dbu = new \App\Database();
    $this->dbu->prepareSql($this->sql);
    $this->dbu->execReq();
    return true;
    }
}
?>