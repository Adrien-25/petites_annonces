<?php
namespace App;

use \PDO;

class Database{
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;
    private $statement;
    public function __construct($db_name= 'annonces', $db_user= 'root',$db_pass= '', $db_host = 'localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->pdo = null ;
        $this->getPDO();

    }
    
    public function getPDO(){
        if($this->pdo === null){

            $this->pdo = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_user, $this->db_pass); 
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        }
        return $this->pdo;
    }
    public function query($statement){
        $req = $this->pdo->prepare($statement);
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_OBJ);

        
        
        return $datas;
        
    }
    public function prepareSql($sql)
    {

        $this->statement = $this->pdo->prepare($sql);
       
    }
    public function param($cursor, $value, $typeParam)
    {
        $this->statement->bindParam($cursor, $value, $typeParam);
    }
    public function execReq()
    {
        $this->statement->execute();
    }
public function getAll()
{
return $this->statement->fetchAll(PDO::FETCH_OBJ);
}

public function getOne()
{
return $this->statement->fetch(PDO::FETCH_OBJ);
}



}
            
?>
