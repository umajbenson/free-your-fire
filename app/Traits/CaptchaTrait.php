<?php namespace App\Traits;

use ReCaptcha\ReCaptcha;

trait CaptchaTrait {

    public function captchaCheck($data)
    {

        $response = $data['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $secret   = env('CAPTCHA_SECRET');

        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($response, $remoteip);
        if ($resp->isSuccess()) {
            return 1;
        } else {
            return 0;
        }

    }

}