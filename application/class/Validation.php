<?php
namespace App;
    use \PDO;

    class Validation
    {
        public $sql;
        
public function valider($ann_unique_id){

    $this->sql = "UPDATE `annonce` SET `ann_est_valider` = '1',`ann_date_validation`= date('Y-m-d') WHERE `annonce`.`ann_unique_id` = '.$ann_unique_id.'";
    $this->dbu = new \App\Database();
     $this->dbu->prepareSql($this->sql);
    return true;
    }
}
?>