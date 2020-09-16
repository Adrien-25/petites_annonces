<?php
namespace App;

use \App\Database;

class utilisateur
{
    private $sql;

    public function selectEmail()
    {

        $this->sql = 'SELECT *  FROM utilisateur WHERE email =?';
        $this->db = new \App\Database();
        $this->db->prepareSql($this->sql);
        $this->db->execReq();
        return $this->db->getOne();
        
}


