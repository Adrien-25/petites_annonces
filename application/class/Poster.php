<?php
namespace App;

$dbh = new \App\Database();
class Poster
{
    public  $ann_description;
    public $ann_titre;
    public $ann_date_ecriture;
    public $categorie_id;
    public $utilisateur_id;
    public $ann_image_url;
    public $ann_image_nom;
    public $usr_nom;
    public $usr_prenom;
    public $usr_telephone;
    public $usr_email;
    public $_POST;
    public static function faitlePoster()
    {

       
        if(count(self::$_POST) > 0){
            if (strlen(trim($_POST['description'])) !== 0){
                 self::$ann_description = trim($_POST['description']);
            }

            if (strlen(trim($_POST['titre'])) !== 0){
                 self::$ann_titre = trim($_POST['titre']);
            }
            if (strlen(trim($_POST['prix'])) !== 0){
                 self::$ann_titre = trim($_POST['titre']);
            }
            if(strlen(trim($_POST['nom_image'])) !== 0){
                 self::$ann_image_nom = trim($_POST['nom_image']);
            }
            if(strlen(trim($_POST['date_eciture'])) !== 0){
                 self::$ann_date_ecriture = trim($_POST['date_ecriture']);
            }
            if(strlen(trim($_POST['categorie'])) !== 0){
                 self::$categorie_id = trim($_POST['categorie']);
            }
            if(strlen(trim($_POST['nom'])) !== 0){
                 self::$usr_nom = trim($_POST['nom']);
            }
            if(strlen(trim($_POST['prenom'])) !== 0){
                 self::$usr_prenom = trim($_POST['prenom']);
            }
            if(strlen(trim($_POST['telephone'])) !== 0){
                self::$usr_telephone = trim($_POST['telephone']);
            }
            if(strlen(trim($_POST['email'])) !== 0){
                 self::$usr_email = trim($_POST['email']);
            }

            $sql = 

        } 
                
    }
                
}



?>