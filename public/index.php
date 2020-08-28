<?php
require_once  dirname(dirname(__FILE__)).'/vendor/autoload.php';
define('BASE_PATH', '/petites-annonces/public');
// pour passer à twig pour avoir les bonnes adresses à (mettre dans le render)
define('SERVER_URI', $_SERVER['REQUEST_METHOD'].'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['REMOTE_PORT'].BASE_PATH);
//  $uri = $_SERVER['REQUEST_uri'];
 

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

$router->map('GET', '/lister', function(){
    // dans le cas ou on est dans la page de contact
    \App\Lister::appelLister();
});

// slug est une chaîne de caratère avec des tirets .ici le slug peut être n'importe quoi[*] et -[i] veut dire un entier (:slug et :id pour récupérer des paramètres)
// $router->map('GET', '/annonce/[*:slug]-[i:id]', function($slug, $id){
//     // dans le cas ou on est dans la page 
//     echo " je suis dans l'annonce $slug avec le numero $id ";
// });
// méthodes match pour trouver un résultat
$match = $router->match();
if($match !== null){
    //  call_user_func_array ..appelle la fonction de rappel avec les paramètres rassemblés en tableau
    call_user_func_array($match['target'], $match['params']);
    $match['target']();
    // $match['target']($match['params']['slug'], $match['params']['id']);
}



    $db = new App\Database('annonces');

    use App\Twig;

        //render template
        $twig = new Twig('base.html.twig');
        $twig->render([
            //  'connexion' => $categories->data,
            ]);

    

?>
