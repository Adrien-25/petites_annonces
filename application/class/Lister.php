<?php

namespace App;

class Lister{
    public static function appelLister(){

        $db = new \App\Database();
        $dataSize = $db->query("SELECT * FROM annonce");
        // changer la variable pour l'objet connection en fonction des pages
        $db = new \App\Database();
        $data = $db->query('SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 LIMIT 10'); 
    
        $dataAll = [
            "DataLimit" => $data,
            "DataAll" => $dataSize,
        ];
        return $dataAll;
    }
    public static function appelListerSearch($formData){
        if ($formData['searchInput'] && count($formData) == 1){
            $input = $formData['searchInput'];
            $db = new \App\Database();
            $dataSize = $db->query("SELECT * FROM annonce WHERE ann_description LIKE '%".$input."%'");
            $db = new \App\Database();
            $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 AND ann_description LIKE '%".$input."%' LIMIT 10"); 
        } else if (empty($formData['searchInput']) && count($formData) > 0){
            $tabCat = '';
            $size = count($formData) - 1;
            for ($i = 1; $i <= $size; $i++){
                $tabCat .= 'annonce.categorie_id = ' .$formData[$i];
                if ($i < $size){
                    $tabCat .= ' OR ';
                }
            }
            $db = new \App\Database();
            $dataSize = $db->query("SELECT * FROM annonce INNER JOIN categorie WHERE $tabCat");

            $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 AND (".$tabCat.") LIMIT 10"); 

        } else {
            $input = $formData['searchInput'];
            $db = new \App\Database();
            $dataSize = $db->query("SELECT * FROM annonce WHERE ann_description LIKE '%".$input."%'");
            $db = new \App\Database();

        }

        // $db = new \App\Database();
        // $data = $db->query('SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 LIMIT 10'); 

        $dataAll = [
            "DataLimit" => $data,
            "DataAll" => $dataSize,
        ];
        return $dataAll;

    }
    public static function ajouterAnnonces($offset){
        // changer la variable pour l'objet connection en fonction des pages
        if (empty($offset)){
            $offset = 0;
        }
        $db = new \App\Database();
        $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 LIMIT 10 OFFSET ".$offset."");
        // $offset+=10;
        return $data;
    }
}

?>
        
    

               




       
            


 
