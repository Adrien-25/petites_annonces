<?php
/***********************************
  Téléchargement Fichier PDF
************************************/

namespace App;

use Fpdf\Fpdf;

class Pdf extends Fpdf{
    public static function annoncePdf($donnee){
        //======================================================
        // RECUPERATION DES DONNEES
        //======================================================
        $titre = $donnee[0]->ann_titre;
        $image = $donnee[0]->ann_image_url;
        if(empty($image)){
            $image = $donnee[0]->cat_libelle.'.jpg';
        }
        $description = $donnee[0]->ann_description;
        $prix = $donnee[0]->ann_prix;
        $categorie = $donnee[0]->cat_libelle;
        $date = $donnee[0]->ann_date_ecriture;
        $nom = $donnee[0]->usr_prenom;
        $prenom = $donnee[0]->usr_nom;
        $telephone = $donnee[0]->usr_telephone;
        $email = $donnee[0]->email;
        $adresse = $donnee[0]->usr_adresse;
        $ville = $donnee[0]->usr_ville;
        $code_postale = $donnee[0]->usr_code_postale;

        //======================================================
        // PARAMETRAGE DU PDF
        //======================================================

        //----------------
        // GENERAL
        //----------------
        $pdf = new Pdf();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        $pdf->SetTextColor(255,0,0);
        $pdf->SetFont('Arial','B',25);
        $pdf->Cell(0,20,utf8_decode($titre),1,2,'C');

        //----------------
        // IMAGE 
        //----------------
        /* Marge Top */
        $pdf->Cell(0,10,'',0,2,'C');

        /* Settings Imges */
        $pdf->Image(dirname(dirname(dirname(__FILE__))).'/public/assets/media/'.$image,(30)/2,null,0,90);

        /* Marge Bottom */
        $pdf->Cell(0,10,'',0,2,'C');
        
        //----------------
        // COLONNE DESCRIPTION
        //----------------
        /* Titre Description */
        $pdf->SetTextColor(0,0,0);
        $contact_position = $pdf->getY();
        $pdf->MultiCell(95,20,'Description','R','C',false);

        /* Ligne Horizontale */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);

        /* Prix */
        $pdf->SetFont('Arial','B',20);
        $pdf->SetTextColor(255,0,0);
        $pdf->MultiCell(95,20,iconv("UTF-8", "CP1252", $prix." €"),'R','C',false);

        /* Ligne Horizontale */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);

        /* Description Contenu */
        $pdf->SetFont('Arial','',16);
        $pdf->SetTextColor(0,0,0);
        $pdf->MultiCell(95,10,utf8_decode($description),'R','C',false);

        /* Ligne Horizontale */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);

        /* Categorie */
        $pdf->SetFont('Arial','B',16);
        $pdf->MultiCell(95,20,utf8_decode($categorie),'R','C',false);

        /* Ligne Horizontale */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);

        /* Date */
        $pdf->SetFont('Arial','I',16);
        $pdf->MultiCell(95,20,utf8_decode($date),'R','C',false);

        // ----------------
        // COLONNE CONTACT  
        // ----------------
        /* Titre */
        $pdf->SetXY($current_x + 95, $contact_position);
        $pdf->SetFont('Arial','B',25);
        $pdf->MultiCell(95,20,'Contact',0,'C',false);

        /* Lignes */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);

        /* Saut de Ligne */
        $pdf->MultiCell(95,15,'',0,'C',false);

        /* Nom et Prenom */
        $pdf->SetTextColor(0,0,0);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->SetFont('Arial','',16);
        $pdf->MultiCell(95,15,$nom.' '.$prenom,0,'C',false);

        /* Telephone */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15, $telephone,0,'C',false);

        /* Email */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15,$email,0,'C',false);

        /* Adresse */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15,$adresse,0,'C',false);

        /* Code Postal et Ville */
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15,$code_postale.' '.$ville,0,'C',false);

        //----------------
        // SAUVEGARDE DU PDF
        //----------------
        $pdf->Output();
        
    }
}

?>