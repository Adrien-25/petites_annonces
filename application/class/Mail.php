<?php
namespace App;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Mail
{

public function __construct($type, $email, $nom, $prenom, $titre, $description, $prix,  $telephone, $ann_unique_id)
{
    

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

        try {
                //Server settings
                //    Activer la sortie de débogage détaillée
                 $mail->SMTPDebug = 0;
                // $mail->SMTPDebug = 3;                      
                $mail->CharSet =  "utf-8";
                // Envoyer via SMTP
                $mail->isSMTP(); 
                // Configurez le serveur SMTP pour envoyer                                           
                $mail->Host = SMTP;
                // Activer l'authentification SMTP 
                $mail->SMTPAuth   = true; 
                // Nom d'utilisateur SMTP 
                $mail->Username   = MAIL_USER_NAME;  
                //Mot de passe SMTP                   
                $mail->Password   = MAIL_PASSWORD; 
                // Activer le cryptage TLS                                  
                $mail->SMTPSecure =  SECURITY; 
                // Port TCP auquel se connecter        
                $mail->Port       =  PORT;                                
                //Recipients
                $mail->setFrom(MAIL, NAME_COMPANY);
                //Ajouter un destinataire
                $mail->addAddress($email,$prenom . ' ' . $nom);   
                // $mail->addAddress('ellen@example.com');     //  Le nom est facultatif///Name is optional

    // Content
    $mail->isHTML(true);

    //Définir le format d'email sur HTML ///Set email format to HTML
    if ($type === 'validation')
    {
        $link = SERVER_URI . '/validation-'.$ann_unique_id;
        $mail->AddEmbeddedImage('../public/assets/medias/logo3.png','cro','../public/assets/medias/logo3.png');
        $mail->Subject = 'Confirmation de votre annonce';
        $mail->Body    = '<div style=" background-color: #fff; padding:4rem; width : 100%; box-sizing : border-box;"><h3><a href="'.SERVER_URI.'/accueil"><img src="cid:cro" alt="velo">Adrien && Fouad </a></h3><br><br><br><br><p>Bonjour '.$prenom.' '.$nom.'
        <br></p><div style="background-color:rgba(236, 240, 241,.7); padding: 2rem; width:100%; box-sizing : border-box;"><p>Voici un récapitulatif de votre annonce:<br> Le titre de votre annonce est : '.$titre.'<br>La descriprtion de votre annonce est : '.$description.'<br>Le prix de votre annonce est : '.$prix.'€.<br>
         Votre numéro de téléphone est le : '.$telephone.'  !</p></div><a href="'.$link .'">Veuillez Cliquer sur ce lien pour valider votre annonce.</a> <br> <a href="'.$link .'">Veuillez Cliquer sur ce lien pour supprimer votre annonce.</a></div><br>';



    }elseif($type === 'supprimer')
    {
        $link = SERVER_URI . '/supprimer-' . $ann_unique_id;
        $mail->AddEmbeddedImage('../public/assets/medias/logo3.png','cro','../public/assets/medias/logo3.png');
        $mail->Subject = 'Suppression de votre annonce';
        $mail->Body    = '<h1><a href="'.SERVER_URI.'"><img src="cid:cro" alt="velo">Adrien && Fouad </a></h1><br><br><p>Bonjour '.$prenom.' !</p><br><a href="'.$link .'">Veuillez Cliquer sur ce lien pour supprimer votre annonce.</a>';

    }else{
        echo 'les paramétres de types sont incorrects';
        return;
    }
    echo 'tes';

    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Votre message n'a pas été envoyé. Il y a une erreur de l'expéditeur: {$mail->ErrorInfo}";

}

}

    
}

?>