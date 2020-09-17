<?php

namespace App;
use App\ReCaptcha;
class Captcha
{
    public static function testCaptcha()
    {
        $siteKey = '6Lem2coZAAAAANrcW6L41VKF1skSH7XmNiSdwgT-'; // votre clé publique
        $secret = '6Lem2coZAAAAAFoDhmP82FlBcU9QsNMM2QajFISO'; // votre clé privée
        
        $reCaptcha = new ReCaptcha($secret);
        if(isset($_POST["g-recaptcha-response"])) {
            $resp = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
                );
            if ($resp != null && $resp->success) {
                $testCaptcha = true;
            }
            else {
                $testCaptcha = false;
            }
        } 
        return $testCaptcha;
    }

}
?>