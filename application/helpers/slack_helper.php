<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ( ! function_exists('shout'))
{
	function shout($payload, $channel = "", $username = "incoming-webhook") {
        define('WEBHOOK_URL', 'https://hooks.slack.com/services/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');
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
