<?php

namespace App;

use Twig\Template;

class Lister
{
    public static function appelLister(){
        // changer la variable pour l'objet connection en fonction des pages
        $db = new \App\Database();
        $template = new \App\Twig('pages/index.html.twig');
        $template->render([]);
        foreach($db->query('SELECT * FROM annonce') as $post){
            echo "$post->ann_titre <br>";
       
        }
    }
}
?>
    

               
        
           
       






       
            


 
