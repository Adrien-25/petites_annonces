<?php
namespace App;
use App\Mail;


class Mailsupp
{
    public $suppMail;
    public $type;
    public $email;
    public $nom;
    public $prenom;
    public $titre;
    public $description;
    public  $prix;
    public   $telephone;
    public $donnee;
    // public function __construct($usr_email, $usr_nom, $usr_prenom, $ann_titre, $ann_prix, $ann_description, $usr_telephone)
    
    // {
    //   $this->usr_email = $usr_email;
    //   $this->usr_prenom = $usr_prenom;
    //   $this->usr_nom = $usr_nom; 
    //   $this->ann_titre = $ann_titre;
    //   $this->ann_prix= $ann_prix;
    //   $this->ann_description = $ann_description;   
    //   $this->usr_telephone = $usr_telephone;  
    // }


    
    public function  suppMail($ann_unique_id) 
    {

        $db = new \App\Database();
        $id = $ann_unique_id;

        // $this->donnee = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, usr_prenom ,usr_nom ,usr_telephone ,email ,usr_adresse ,usr_ville ,usr_code_postale 
        // FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id WHERE ann_unique_id=$id;");

      $this->donnee = $db->query( "SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, usr_prenom ,usr_nom ,usr_telephone ,email ,usr_adresse ,usr_ville ,usr_code_postale 
      FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id WHERE ann_unique_id= '$id'");

     
     
        $this->suppMail = new Mail('supprimer', $this->donnee[0]->email, $this->donnee[0]->usr_nom, $this->donnee[0]->usr_prenom,$this->donnee[0]->ann_titre, $this->donnee[0]->ann_description, $this->donnee[0]->ann_prix, $this->donnee[0]->usr_telephone,  $ann_unique_id);

        return true;

    } 
}

?>