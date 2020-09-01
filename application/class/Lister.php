<?php

namespace App;


 
 

class Lister
{
  
    public static function appelLister(){
        // changer la variable pour l'objet connection en fonction des pages
        $db = new \App\Database();
        $data = $db->query('SELECT `ann_description`,`ann_titre`,`ann_prix`,`ann_date_ecriture`,`ann_image_url`,`ann_image_nom`,`cat_libelle`, `email` FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id ORDER BY ann_date_ecriture LIMIT 10'); 
    
        return $data;
        
    }

}

?>
        
    

               




       
            


 
