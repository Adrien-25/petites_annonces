<?php
namespace App;


 use \PDO;

class Poster
{
    public  $ann_description;
    public $ann_titre;
    public $ann_prix;
    public $ann_date_ecriture;
    public $categorie_id;
    public $utilisateur_id;
    public $ann_image_url;
    public $ann_image_nom;
    public $usr_nom;
    public $usr_prenom;
    public $usr_telephone;
    public $usr_email;
    public  $_POST;
    public $sql;
    public $sth;
    public $dbh;
    


    public  function addPosts($ann_prix, $ann_description, $ann_titre, $categorie_id)

    {
    
     $this->sql = "INSERT INTO `annonce` ( `utilisateur_id`, `categorie_id`, `ann_description`, `ann_titre`, `ann_prix`, `ann_date_ecriture`, `ann_image_url`, `ann_image_nom`) VALUES (:utilisateur_id, :categorie_id, :ann_description, :ann_titre, :ann_prix, :ann_date_ecriture,:ann_image_url, :ann_image_nom);";
     $this->dbh = new \App\Database();
     $this->dbh->prepareSql($this->sql);

     

     $this->dbh->param(':utilisateur_id', 1, PDO::PARAM_INT);
     $this->dbh->param(':categorie_id', $categorie_id, PDO::PARAM_INT);
     $this->dbh->param(':ann_description', $ann_description, PDO::PARAM_STR);
     $this->dbh->param(':ann_titre', $ann_titre, PDO::PARAM_STR);
     $this->dbh->param(':ann_prix', $ann_prix, PDO::PARAM_STR);
     $this->dbh->param(':ann_date_ecriture',date('Y-m-d'), PDO::PARAM_STR);
     $this->dbh->param(':ann_image_url', 'http://google.fr', PDO::PARAM_STR);
     $this->dbh->param(':ann_image_nom', 'lol.jpeg', PDO::PARAM_STR);
     
     $this->dbh->execReq();
       
          return true;
     } 
}

?>
            

           
             
             

                
                



