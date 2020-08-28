<?php
namespace App;

use \PDO;

class Database{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    public function __construct($db_name='annonces', $db_user='root',$db_pass='', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->pdo = null ;
        $this->getPDO();
    }
    
    private function getPDO(){
      

            $pdo = new PDO('mysql:host='.$this->db_host.';port=3308;dbname='.$this->db_name,$this->db_user, $this->db_pass); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
            return $this->pdo;
        }
        public function query($statement){
            $req = $this->pdo->query($statement);
            $datas = $req->fetchAll(PDO::FETCH_OBJ);
            return $datas;
        }
    }
    ?>
     
   









