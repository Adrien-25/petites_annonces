<?php

namespace App;
class Lister
{
    public static function appelLister(){
        // changer la variable pour l'objet connection en fonction des pages
        if (empty($offset)){
            $offset = 0;
        }
        var_dump($offset);
        $db = new \App\Database();
        $data = $db->query("SELECT * FROM annonce LIMIT 10 OFFSET ".$offset."");

        $offset+=10;
        var_dump($offset);
        return $data;
    }
}

?>
        
    

               




       
            


 
