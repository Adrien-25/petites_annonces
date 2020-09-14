<?php

/***********************************
  Téléchragement Fichier PDF
************************************/
namespace App;
require "fpdf.php";
class PDF extends FPDF{
    public static function annoncePdf($donnee){
        // var_dump($donnee);
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
        // var_dump($image);
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage('P','A4',0);
        $pdf->SetTextColor(255,0,0);
        $pdf->SetFont('Arial','B',25);
        $pdf->Cell(0,20,utf8_decode($titre),1,2,'C');
        //Marge haut image
        $pdf->Cell(0,15,'',0,2,'C');
        //Image
        $pdf->Image(dirname(dirname(dirname(__FILE__))).'/public/assets/media/'.$image,(65)/2,null,150);
        //Marge bas image
        $pdf->Cell(0,15,'',0,2,'C');
        
        // COLONNE DECRIPTION
        $pdf->SetTextColor(0,0,0);
        $contact_position = $pdf->getY();
        $pdf->MultiCell(95,20,'Description','R','C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);
        $pdf->SetFont('Arial','B',20);
        $pdf->SetTextColor(255,0,0);
        $pdf->MultiCell(95,20,iconv("UTF-8", "CP1252", $prix." €"),'R','C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);
        $pdf->SetFont('Arial','',16);
        $pdf->SetTextColor(0,0,0);
        $pdf->MultiCell(95,20,utf8_decode($description),'R','C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);
        $pdf->SetFont('Arial','B',16);
        $pdf->MultiCell(95,20,utf8_decode($categorie),'R','C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX();
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);
        $pdf->SetFont('Arial','I',16);
        $pdf->MultiCell(95,20,utf8_decode($date),'R','C',false);

        // COLONNE CONTACT
        $pdf->SetXY($current_x + 95, $contact_position);
        $pdf->SetFont('Arial','B',25);
        $pdf->MultiCell(95,20,'Contact',0,'C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->Line($current_x+37.5,$current_y,$current_x+52.5,$current_y);
        $pdf->MultiCell(95,15,'',0,'C',false);
        $pdf->SetTextColor(0,0,0);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->SetFont('Arial','',16);
        $pdf->MultiCell(95,15,$nom.' '.$prenom,0,'C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15, $telephone,0,'C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15,$email,0,'C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15,$adresse,0,'C',false);
        $current_y = $pdf->GetY();
        $current_x = $pdf->GetX()+95;
        $pdf->SetXY($current_x, $current_y);
        $pdf->MultiCell(95,15,$code_postale.' '.$ville,0,'C',false);

        $pdf->Output();
    }
}

?>