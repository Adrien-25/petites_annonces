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
        //Server settings;
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        // $mail->SMTPDebug = 2;                      //    Activer la sortie de débogage détaillée
        $mail->CharSet =  "utf-8";
        // // $mail->SMTPDebug = 2;
        $mail->isSMTP();                                            // Envoyer via SMTP
        $mail->Host       = "mail.adrienschmidt.fr"; // Configurez le serveur SMTP pour envoyer 
        $mail->SMTPAuth   = true;                                  // Activer l'authentification SMTP 
        $mail->Username   = '_mainaccount@adrienschmidt.fr';       // Nom d'utilisateur SMTP 
        $mail->Password   = 'MS4RbucNVBznw5';                      //Mot de passe SMTP      
        $mail->SMTPSecure = 'tls';        // Activer le cryptage TLS 
        $mail->Port       =  465;                                  // Port TCP auquel se connecter, utiliser 465 for ////TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        // //Recipients
        $mail->setFrom('_mainaccount@adrienschmidt.fr', 'LamaShop Company');
        // // $mail->addAddress($email,$prenom . ' ' . $nom);     //Ajouter un destinataire
        $mail->addAddress('adrien.schmidt7@gmail.com');     //Ajouter un destinataire

        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Attachments (piéces jointes)
        // $mail->addAttachment('/var/tmp/file.tar.gz');       // Ajouter des pièces jointes // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  // Optional name
        // Instantiation and passing `true` enables exceptions
        try {
            // Content
            $mail->isHTML(true);
            //Définir le format d'email sur HTML ///Set email format to HTML
            if ($type == 'validation')
            {

                $link = SERVER_URI . '/validation-'.$ann_unique_id;
                $mail->AddEmbeddedImage('../public/assets/media/logo3.png','cro','../public/assets/media/logo3.png');
                $mail->Subject = 'Confirmation de votre annonce';
                $mail->Body = '
                <div style="background-color: #fff; padding:4rem; width : 100%; box-sizing : border-box;">
                    <h3>
                        <a href="'.SERVER_URI.'/accueil">
                            <img src="cid:cro" alt="velo">Petites Annonce
                        </a>
                    </h3>
                    <br>
                    <p>Bonjour '.$prenom.' '.$nom.'<br></p>
                <div style="background-color:rgba(236, 240, 241,.7); padding: 2rem; width:100%; box-sizing : border-box;">
                    <p style="font-weight: bold;">Voici un récapitulatif de votre annonce:</p>
                    <p>Titre : '.$titre.'</p>
                    <p>Description : '.$description.'</p>
                    <p>Prix : '.$prix.'€.</p>
                    <p>Numéro de téléphone : '.$telephone.'  !</p>
                </div><a href="'.$link .'">Cliquez ici pour valider votre annonce</a><br> <a href="'.$link .'">Cliquez ici pour supprimer votre annonce</a></div><br>';

            }elseif($type === 'supprimer')
            {
                $link = SERVER_URI . '/supprimer-' . $ann_unique_id;
                $mail->AddEmbeddedImage('../public/assets/media/logo3.png','cro','../public/assets/media/logo3.png');
                $mail->Subject = 'Suppression de votre annonce';
                $mail->Body    = '<h1><a href="'.SERVER_URI.'"><img src="cid:cro" alt="velo">Adrien && Fouad </a></h1><br><br><p>Bonjour '.$prenom.' !</p><br><a href="'.$link .'">Veuillez Cliquer sur ce lien pour supprimer votre annonce.</a>';

            }else{
                echo 'les paramétres de types sont incorrects';
                return;
            }
            echo 'pré-envoi';

            $mail->send();
            echo 'Le message a été envoyé';
        } catch (Exception $e) {
            echo "Votre message n'a pas été envoyé. Il y a une erreur de l'expéditeur: {$mail->ErrorInfo}";

        }

    }    
}


?>