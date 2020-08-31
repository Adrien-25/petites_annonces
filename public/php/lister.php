<?php
 
require_once '../vendor/autoload.php';

// dirname — Renvoie le chemin du dossier parent

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
?>
