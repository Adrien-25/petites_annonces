<?php
require_once  dirname(dirname(__FILE__)).'/vendor/autoload.php';
define('BASE_PATH', '/petites-annonces/public');
// pour passer à twig pour avoir les bonnes adresses à (mettre dans le render)
define('SERVER_URI', $_SERVER['REQUEST_METHOD'].'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['REMOTE_PORT'].BASE_PATH);

// pour initialiser altorouter
$router = new AltoRouter();
$router->setBasePath(BASE_PATH);

// print_r(dirname(__FILE__));
// Renseignement des routes
// on précise la méthode ici 'get' ensuite la route à matché '/' et la cible ça peut être n'importe quoi par exemple une fonction
// $router->map('GET', '/', function(){
//     // dans le cas ou on est dans la page d'accueil
//     echo 'salut';
// });

$router->map('GET', '/accueil', function(){
    // dans le cas ou on est dans la page de contact
    $value = \App\Lister::appelLister();
    $AnnonceLimit = $value['DataLimit'];
    $nbrAnnonce = sizeof($value['DataAll']);
    $chargeTwig = new \App\Twig('pages/index.html.twig');
    $chargeTwig->render(['listes_annonces'=> $AnnonceLimit,'Nbr_annonces'=>$nbrAnnonce]);
});

$router->map('GET', '/annonce/[i:id]', function($id){
    // dans le cas ou on est dans la page de détail
    $donnee = \App\Annonce::donneeAnnonce($id);
    $chargeTwig = new \App\Twig('pages/annonce.html.twig');
    $chargeTwig->render(['annonce'=>$donnee]);
});
$router->map('GET', '/getLastArticle/[i:offset]', function($offset){
    // dans le cas ou on est dans la page de d'accueil
    $ajout = \App\Lister::ajouterAnnonces($offset);
    $chargeTwig = new \App\Twig('pages/ajouterAnnonce.html.twig');
    $chargeTwig->render(['listes_annonces'=> $ajout]);
});


$router->map('GET', '/poster', function(){
    // dans le cas ou on est dans la page de contact
    $posts = \App\Poster::faitlePoste();

    $charge1Twig = new \App\Twig('pages/poster.html.twig');
    $charge1Twig->render([]);
});
    
$match = $router->match();
    // call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}



   




    
    


?>
