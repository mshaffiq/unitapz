<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AjaxController extends CI_Controller
{
    public function ajaxPingServer()
    {
        $hostname = [
            'tauthapi.tekkis.my',
            'api.tpay.com.my',
            'tauth-staging.tekkis.my',
            'merchant-staging.tverify.com.my',
            'merchant-staging.tpay.com.my',
            'checkout-staging.tpay.com.my'
        ];
        $data = [];
        foreach ($hostname as $host) {
            exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
            if ($rval === 0) {
                $data[$host] = "success";
            } else {
                shout("ALERT! " . $host . " is down!!!","mshaffiq");
                $data[$host] = "failed";
            }
        }
        echo json_encode($data);
    }

    public function ajaxCurlServer()
    {
        $hostname = [
            'tauthapi.tekkis.my',
            'api.tpay.com.my',
            'tauth-staging.tekkis.my',
            'merchant-staging.tverify.com.my',
            'merchant-staging.tpay.com.my',
            'checkout-staging.tpay.com.my'
        ];
        $data = [];
        foreach ($hostname as $host) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, "https://" . $host);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, true);
            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
            if ($response === false) {
                shout("ALERT! " . $host . " is down!!!","mshaffiq");
                $data[$host] = "failed";
            } else {
                if ($httpCode == 200 || $httpCode == 307 || $httpCode ==302) {
                    $data[$host] = "success";
                } else {
                    shout("ALERT! " . $host . " is down!!!","mshaffiq");
                    $data[$host] = "failed";
                }
            }
        }
        echo json_encode($data);exit;
    }
}
