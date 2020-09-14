<?php
namespace App;
use App\Mail;


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
    public $envoiMail;

    public function __construct($usr_email, $usr_nom, $usr_prenom, $ann_titre, $ann_prix, $ann_description, $usr_telephone)
    
    {
      $this->usr_email = $usr_email;
      $this->usr_prenom = $usr_prenom;
      $this->usr_nom = $usr_nom; 
      $this->ann_titre = $ann_titre;
      $this->ann_prix= $ann_prix;
      $this->ann_description = $ann_description;   
      $this->usr_telephone = $usr_telephone;  
    }


    public  function addPosts($ann_prix, $ann_description, $ann_titre, $categorie_id)

    {
        
     $this->sql = "INSERT INTO `annonce` ( `utilisateur_id`, `categorie_id`, `ann_description`, `ann_titre`, `ann_prix`, `ann_date_ecriture`, `ann_image_url`, `ann_image_nom`, `ann_unique_id`, `ann_est_valider`)
      VALUES (:utilisateur_id, :categorie_id, :ann_description, :ann_titre, :ann_prix, :ann_date_ecriture,:ann_image_url, :ann_image_nom, :ann_unique_id, :ann_est_valider);";
     $this->dbh = new \App\Database();
     $this->dbh->prepareSql($this->sql);
     

     $ann_unique_id = uniqid('ann_');

     $this->dbh->param(':utilisateur_id', 1, PDO::PARAM_INT);
     $this->dbh->param(':categorie_id', $categorie_id, PDO::PARAM_INT);
     $this->dbh->param(':ann_description', $ann_description, PDO::PARAM_STR);
     $this->dbh->param(':ann_titre', $ann_titre, PDO::PARAM_STR);
     $this->dbh->param(':ann_prix', $ann_prix, PDO::PARAM_STR);
     $this->dbh->param(':ann_date_ecriture',date('Y-m-d'), PDO::PARAM_STR);
     $this->dbh->param(':ann_image_url', '', PDO::PARAM_STR);
     $this->dbh->param(':ann_image_nom', '', PDO::PARAM_STR);
     $this->dbh->param(':ann_unique_id', $ann_unique_id, PDO::PARAM_STR);
     $this->dbh->param(':ann_est_valider', 0 , PDO::PARAM_INT);
    
  


     $this->dbh->execReq();
     
     $this->envoiMail = new Mail('validation', $this->usr_email, $this->usr_nom, $this->usr_prenom,$this->ann_titre, $this->ann_description, $this->ann_prix, $this->usr_telephone, $ann_unique_id);
          
     return true;
 
     } 
}

?>
            

           
             
             

                
                



