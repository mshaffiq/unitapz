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
                $data[$host] = "failed";
            }
        }
        echo json_encode($data);
    }
}
