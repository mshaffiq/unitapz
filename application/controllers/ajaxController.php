<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ajaxController extends CI_Controller
{

    public function ajaxPingServer()
    {
        $hostname = 'google.com';
        exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($hostname)), $res, $rval);
        if ($rval === 0) {
            echo 'Ping was successful';
        } else {
            echo 'Ping failed';
        }
        foreach ($res as $line) {
            echo $line . "\n";
        }
    }
}
