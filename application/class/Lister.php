<?php

namespace App;
class Lister
{
    public static function appelLister(){
        // changer la variable pour l'objet connection en fonction des pages
        $db = new \App\Database();
        $data = $db->query('SELECT * FROM annonce'); 

        return $data;
    }
}

?>
        
    

               




       
            


 
