<?php
 
require_once dirname(dirname(dirname(__FILE__))).'/vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader(dirname(dirname(__FILE__)).'/template');
$twig = new \Twig\Environment($loader, array(
    'cache' => dirname(dirname(__FILE__)).'/cache',
    'debug' => true,
));
$twig->addExtension(new \Twig\Extension\DebugExtension());


$db = new \App\Database();

$template = $twig->load('pages/lister.html.twig');
    // echo $template->render([]);
?>
<ul>
   <?php foreach($db->query('SELECT * FROM annonce') as $post): ?>
        <li>
            <a href="index.php?p=post&id=<?= $post->utilisateur_id; ?> "><?= $post->ann_titre; ?></a>
  <?php      
var_dump($post);
?>
</li>
    <?php endforeach; ?>

</ul>
