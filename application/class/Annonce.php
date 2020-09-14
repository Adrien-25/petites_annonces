<?php

namespace App;


class Annonce
{
    public static function donneeAnnonce($id){
        $db = new \App\Database();
        // $donnee = $db->query("SELECT * FROM annonce WHERE ann_id=$id");
        $donnee = $db->query("SELECT `ann_id`,`ann_description`,`ann_titre`,`ann_prix`,`ann_date_ecriture`,`ann_image_url`,`ann_image_nom`,`cat_libelle`, `usr_prenom` ,`usr_nom` ,`usr_telephone` ,`email` ,`usr_adresse` ,`usr_ville` ,`usr_code_postale` 
        FROM annonce INNER JOIN categorie ON annonce.categorie_id = categorie.id  INNER JOIN utilisateur ON annonce.utilisateur_id = utilisateur.id WHERE ann_id=$id;");
        var-dump(query);
        return $donnee;
    }
}
// PDO::query() exécute une requête SQL en appelant une seule fonction, retourne le jeu de résultats (s'il y en a) retourné par la requête en tant qu'objet 
// PDO::prepare — Prépare une requête à l'exécution et retourne un objet
//La classe PDOStatement ::: Représente une requête préparée et, une fois exécutée, le jeu de résultats associé.
// PDOStatement::bindParam — Lie un paramètre à un nom de variable spécifique
// PDOStatement::bindParam() et/ou PDOStatement::bindValue() doit être appelé pour lier des variables ou des valeurs (respectivement) aux marqueurs de paramètres. Les variables liées passent leurs valeurs en entrée et reçoivent les valeurs de sortie, s'il y en a, de leurs marqueurs de positionnement respectifs
// PDOStatement::execute — Exécute une requête préparée
?>