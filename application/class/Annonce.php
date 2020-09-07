<?php

namespace App;
class Annonce
{
    public static function donneeAnnonce($id){
        $db = new \App\Database();
        // $donnee = $db->query("SELECT * FROM annonce WHERE ann_id=$id");
        $donnee = $db->query("SELECT `ann_id`,`ann_description`,`ann_titre`,`ann_prix`,`ann_date_ecriture`,`ann_image_url`,`ann_image_nom`,`cat_libelle`, `usr_prenom` ,`usr_nom` ,`usr_telephone` ,`email` ,`usr_adresse` ,`usr_ville` ,`usr_code_postale` 
        FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id WHERE ann_id=$id");
        
        return $donnee;
    }
}

?>