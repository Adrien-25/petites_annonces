<?php
    namespace App;
    use App\Mail;

    use \PDO;

    class Supprimer
    {
        public $sql;
        public function supprimer($ann_unique_id)
        {
            $this->sql = "DELETE FROM annonce WHERE annonce.ann_unique_id = '$ann_unique_id';";
            $this->dbr = new \App\Database();
            $this->dbr->prepareSql($this->sql);
            $this->dbr->execReq();
            
            return true;
        }
    }
            
    ?>
            
