<?php
namespace App;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Mail
{

public function __construct($type, $email, $nom, $prenom,$titre, $description, $prix,  $telephone, $ann_unique_id)
{
    

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings;
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->SMTPDebug = 0;                      //    Activer la sortie de débogage détaillée
     $mail->CharSet =  "utf-8";
    // $mail->SMTPDebug = 2;
    $mail->isSMTP();                                            // Envoyer via SMTP//Send using SMTP
    $mail->Host = "smtp.office365.com"; // Configurez le serveur SMTP pour envoyer // Set the SMTP server to send through
    $mail->SMTPAuth   = true;  // Activer l'authentification SMTP ///  Enable SMTP authentication
    $mail->Username   = 'fouad.lyousfi@hotmail.com';                     // Nom d'utilisateur SMTP /// SMTP username
    $mail->Password   = 'fl24081989';                               //Mot de passe SMTP      /// SMTP password
    $mail->SMTPSecure =  "tls";         // Activer le cryptage TLS /// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       =  587;                                  // Port TCP auquel se connecter, utiliser 465 for ////TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('fouad.lyousfi@hotmail.com', 'LamaShop^Company');
    $mail->addAddress($email,$prenom . ' ' . $nom);     //Ajouter un destinataire/// Add a recipient
    // $mail->addAddress('ellen@example.com');     //  Le nom est facultatif///Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments (piéces jointes)
    // $mail->addAttachment('/var/tmp/file.tar.gz');       // Ajouter des pièces jointes // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name

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
         Votre numéro de téléphone est le : '.$telephone.'  !</p></div><a href="'.$link .'">Veuillez Cliquer sur ce lien pour valider votre annonce.</a></div><br>';



    }elseif($type === 'supprimer')
    {
        $link = SERVER_URI . '/supprimer-' . $ann_unique_id;
        $mail->Subject = 'Confirmation de votre annonce';
        $mail->Body    = '<h1><a href="'.$link.'"><img src="public/assets/medias/velo.jpg" alt="">Mon velo</a></h1><br><br><p>Bonjour '.$prenom.' !</p><br><a href="'.$link .'">Veuillez Cliquer sur ce lien pour supprimer votre annonce.</a>';

    }else{
        echo 'les paramétres de types sont incorrects';
        return;
    }
    

    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Votre message n'a pas été envoyé. Il y a une erreur de l'expéditeur: {$mail->ErrorInfo}";

}

}

    
}

?>