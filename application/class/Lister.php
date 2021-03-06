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
        // Requête si input reçu et pas de catégorie sélectionnée
        if ($formData['searchInput'] && count($formData) == 1){
            $input = $formData['searchInput'];
            $db = new \App\Database();
            $dataSize = $db->query("SELECT * FROM annonce WHERE ann_description LIKE '%".$input."%'");
            $db = new \App\Database();
            $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 AND ann_description LIKE '%".$input."%' LIMIT 10"); 
        } 
        // Requête si input vide et catgorie sélectionnée
        else if (empty($formData['searchInput']) && count($formData) > 1){
            $tabCat = '';
            $test = 0;
            $testOr = 0;
            foreach ($formData as $formItem) {
                if ($test > 0){
                    if ($testOr > 0 ) {
                        $tabCat .= ' OR ';
                    }
                    $tabCat .= ' annonce.categorie_id = ' .$formItem; 
                    $testOr++; 
                }
                $test++;
            }
            $db = new \App\Database();
            $dataSize = $db->query("SELECT * FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id WHERE $tabCat");
            $db = new \App\Database();
            $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 AND (".$tabCat.") LIMIT 10"); 
        } 
        // Requête si input reçu et catégorie sélectionnée
        else {
            $tabCat = '';
            $testOr = 0;
            $test = 0;
            foreach ($formData as $formItem) {
                if ($test > 0){
                    if ($testOr > 0 ) {
                        $tabCat .= ' OR ';
                    }
                    $tabCat .= 'annonce.categorie_id = ' .$formItem; 
                    $testOr++; 
                }
                $test++;
            }
            $input = $formData['searchInput'];
            $db = new \App\Database();
            $dataSize = $db->query("SELECT * FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id WHERE ann_description LIKE '%".$input."%' AND $tabCat");
            $db = new \App\Database();
            $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0 AND ann_description LIKE '%".$input."%' AND  (".$tabCat.") LIMIT 10"); 

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
    public static function ajouterAnnoncesSearch($offset,$formData){
        // changer la variable pour l'objet connection en fonction des pages
        if (empty($offset)){
            $offset = 0;
        }
        $input = $formData[0];
        $tabCat = '';
        $inputRequest = '';
        $testOr = 0;
        $test = 0;
        if (strlen($input) > 0){
            $inputRequest = "AND ann_description LIKE '%".$input."%' "; 
        }
        if (sizeof($formData) > 1 ) {
            $tabCat = 'AND (';
            foreach ($formData as $formItem) {
                if ($test > 0){
                    if ($testOr > 0 ) {
                        $tabCat .= ' OR ';
                    }
                    $tabCat .= 'annonce.categorie_id = ' .$formItem; 
                    $testOr++; 
                }
                $test++;
            }
            $tabCat .= ')';
        }
     
        // // $offset+=10;
        // $data = ("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0  $inputRequest $tabCat LIMIT 10");
        // var_dump($data);
        $db = new \App\Database();
        $data = $db->query("SELECT ann_id,ann_description,ann_titre,ann_prix,ann_date_ecriture,ann_image_url,ann_image_nom,cat_libelle, email FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id  WHERE ann_est_valider = 0  $inputRequest  $tabCat LIMIT 10 OFFSET $offset"); 
        return $data;
    }
}

?>
        
    

               




       
            


 
