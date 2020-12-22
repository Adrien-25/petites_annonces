<?php
namespace App;

use \App\Database;

class Categorie
{
    private $sql;
    public function selectionCategorie()
    {
        $this->sql = 'SELECT id, cat_libelle FROM categorie';
        $this->dbh = new \App\Database();
        $this->dbh->prepareSql($this->sql);
        $this->dbh->execReq();
        return $this->dbh->getAll();
    }
    public function selectionCategorieById($id)
    {
        $this->sql = 'SELECT id, cat_libelle FROM categorie';
        $this->dbh = new \App\Database();
        $this->dbh->prepareSql($this->sql);
        $this->dbh->execReq();
        return $this->dbh->getAll();
    }
}
?>