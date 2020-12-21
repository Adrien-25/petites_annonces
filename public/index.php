<?php
require_once  dirname(dirname(__FILE__)).'/vendor/autoload.php';
// require '../vendor/autoload.php';
define('BASE_PATH', '/petites-annonces/public');
// pour passer à twig pour avoir les bonnes adresses à (mettre dans le render)
define('SERVER_URI', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].BASE_PATH);
// define('SERVER_URI', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['REMOTE_PORT'].BASE_PATH);

// pour initialiser altorouter
$router = new AltoRouter();
$router->setBasePath(BASE_PATH);

$router->map('GET', '/', function(){
    header('Location: accueil');
});

$router->map('GET|POST', '/accueil', function(){
    $value = \App\Lister::appelLister();
    $AnnonceLimit = $value['DataLimit'];
    $nbrAnnonce = sizeof($value['DataAll']);
    $chargeTwig = new \App\Twig('pages/index.html.twig');
    $categorie = new \App\Categorie();
    $categories=$categorie->selectionCategorie();
    $chargeTwig->render(['categories'=>$categories,'listes_annonces'=> $AnnonceLimit,'Nbr_annonces'=>$nbrAnnonce]);
});
$router->map('GET', '/', function(){
    header('Location: accueil');
});

$router->map('GET', '/annonce/[i:id]', function($id){
    // dans le cas ou on est dans la page de détail
    $donnee = \App\Annonce::donneeAnnonce($id);
    $chargeTwig = new \App\Twig('pages/annonce.html.twig');
    $chargeTwig->render(['annonce'=>$donnee]);
});


$router->map('GET|POST', '/getLastArticle/[i:offset]', function($offset){
    // dans le cas ou on est dans la page de d'accueil
    $ajout = \App\Lister::ajouterAnnonces($offset);
    $chargeTwig = new \App\Twig('pages/ajouterAnnonce.html.twig');
    $chargeTwig->render(['listes_annonces'=> $ajout]);
});


$router->map('GET|POST', '/poster', function(){
    $ann_prix = "";
    $ann_description= "";
    $ann_titre = "";
    $usr_prenom = "";
    $usr_nom = "";
    $usr_telephone = "";
    $usr_email = "";
    $categorie_id = "selected";
    $error = false;

    if(!empty($_POST)){
        $ann_prix = trim($_POST['prix']);
        $ann_titre = trim($_POST['titre']);
        $usr_prenom = trim($_POST['prenom']);
        $usr_nom= trim($_POST['nom']);
        $usr_email= trim($_POST['email']);
        $ann_description = trim($_POST['description']);
        $usr_telephone = trim($_POST['telephone']);
        $categorie_id = trim($_POST['categorie']);

        if (strlen($ann_prix === 0)){
            $error = true;  
        }
        if (strlen($ann_titre === 0)){
            $error = true;
        }
        if(strlen($usr_prenom=== 0)){
            $error = true;
        }
        if(strlen($usr_nom === 0)){
            $error = true;
        }
        if(strlen($usr_telephone === 0)){
            $error = true;
        }
        if(strlen($usr_email === 0)){
            $error = true;
        }
        if(strlen($categorie_id === 0)){
            $error = true;
        }
        if(strlen($ann_description === 0)){
            $error = true;
        }
        $secretKey = "6Lem2coZAAAAAFoDhmP82FlBcU9QsNMM2QajFISO";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        if($responseKeys["success"]) {
            $captcha = 'valide';
        } else {
            $error = true;
        }
        if($error === false){
            // foreach($_POST as $item){
            //     echo $item;
            //     echo '</br>';
            // };
            $posts = new \App\Poster($usr_email, $usr_nom, $usr_prenom, $ann_titre, $ann_prix, $ann_description, $usr_telephone);
        
            $posts->addPosts($ann_prix, $ann_description, $ann_titre, $categorie_id);
            // $charge1Twig = new \App\Twig('pages/showmsgaddannonce.html.twig');
            // $charge1Twig->render([]);
            return true;
        }
        
    }
    $categorie = new \App\Categorie();
    $categories=$categorie->selectionCategorie();
    $charge1Twig = new \App\Twig('pages/poster.html.twig');
    $charge1Twig->render(['categories'=>$categories, 'email' => $usr_email, 'prenom'=>$usr_prenom, 'nom'=>$usr_nom, 'titre'=>$ann_titre, 'telephone'=>$usr_telephone, 'description'=>$ann_description, 'categorie'=>$categorie_id, 'prix'=>$ann_prix ]);

});



$router->map('GET|POST', '/validation-[*:ann_unique_id]', function($ann_unique_id){
    $validation = new \App\Validation();
    $validation->valider($ann_unique_id);

    // $charge2Twig = new \App\Twig('pages/validation.html.twig');
    // $charge2Twig->render(['idunique' =>$ann_unique_id]);
    $supp = new \App\Mailsupp();
    $supp->suppMail($ann_unique_id);
    header ('Location: /accueil');
});


$router->map('GET|POST', '/supprimer-[*:ann_unique_id]', function($ann_unique_id){
    $suppression = new \App\Supprimer();
    $suppression->supprimer($ann_unique_id);
});
  
$router->map('GET', '/telecharger/[i:id]', function($id){
    // dans le cas ou on est dans la page de détail
    $donnee = \App\Annonce::donneeAnnonce($id);
    $pdf = \App\Pdf::annoncePdf($donnee);
    
    // $chargeTwig = new \App\Twig('pages/annonce.html.twig');
    // $chargeTwig->render(['annonce'=>$donnee]);
});

$match = $router->match();
// fermeture d'appel ou lance le status 404
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// Aucune route ne correspond
    var_dump($_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].BASE_PATH);
    header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');

}
?>
