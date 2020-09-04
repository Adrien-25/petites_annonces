<?php

namespace App;
class Lister
{
    public static function appelLister(){
        $db = new \App\Database();
        $dataSize = $db->query("SELECT * FROM annonce");
        // changer la variable pour l'objet connection en fonction des pages
        $db = new \App\Database();
        $data = $db->query("SELECT * FROM annonce LIMIT 10");
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
        $data = $db->query("SELECT * FROM annonce LIMIT 10 OFFSET ".$offset."");

        $offset+=10;
        return $data;
    }
}

?>
        
    

               




       
            


 
