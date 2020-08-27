<?php
    require_once '../vendor/autoload.php';
    $uri = $_SERVER['REQUEST_uri'];
// pour initialiser altorouter
$router = new AltoRouter();
// Renseignement des routes
// on précise la méthode ici 'get' ensuite la route à matché '/' et la cible ça peut être n'importe quoi par exemple une fonction
$router->map('GET', '/', function(){
    // dans le cas ou on est dans la page d'accueil
    echo 'salut';
});

$router->map('GET', '/nous-contacter', function(){
    // dans le cas ou on est dans la page de contact
    echo 'Nous contacter';
});

// slug est une chaîne de caratère avec des tirets .ici le slug peut être n'importe quoi[*] et -[i] veut dire un entier (:slug et :id pour récupérer des paramètres)
$router->map('GET', '/annonce/[*:slug]-[i:id]', function($slug, $id){
    // dans le cas ou on est dans la page 
    echo " je suis dans l'annonce $slug avec le numero $id ";
});
// méthodes match pour trouver un résultat
$match = $router->match();
if($match !== null){
    //  call_user_func_array ..appelle la fonction de rappel avec les paramètres rassemblés en tableau
    call_user_func_array($match['target'], $match['params']);
    $match['target']();
    // $match['target']($match['params']['slug'], $match['params']['id']);
}



    $db = new App\Database('petites-annonces');

    use App\Twig;

     //render template
     $twig = new Twig('base.html.twig');
     $twig->render([
            //  'connexion' => $categories->data,
         ]);
 });
    ?>
