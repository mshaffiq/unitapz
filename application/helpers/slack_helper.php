<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ( ! function_exists('shout'))
{
	function shout($payload, $channel = "", $username = "incoming-webhook") {
        define('WEBHOOK_URL', 'https://webhook.site/f3c2080a-353b-42ec-b0ed-ad9d2b502711');
        $msg = array(
            "text" => json_encode($payload),
            "channel" => "#".$channel,
            "username" => $username,
            "icon_emoji" => ":warning:"
        );
        $c = curl_init(WEBHOOK_URL);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, array('payload' => json_encode($msg)));
        curl_exec($c);
        curl_close($c);
        return;
    }
}
