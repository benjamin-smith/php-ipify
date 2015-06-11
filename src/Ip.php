<?php

namespace Ipify;

use \Requests;
use \Requests_Exception;
use Ipify\Exception\ConnectionError;
use Ipify\Exception\ServiceError;

class Ip {

    public static function get()
    {

        try {
            $response = Requests::get(Settings::$endpoint, array('User-Agent' => Settings::buildUserAgent()));
        } catch (Requests_Exception $e) {
            throw new ConnectionError("The request failed because it wasn't able to reach the ipify service.
                This is most likely due to a networking error of some sort.");
        }

        if ($response->status_code!==200) {
            throw new ServiceError('Received an invalid status code from ipify:' + (string) $response->status_code +
                '. The service might be experiencing issues.');
        }

        return $response->body;

    }

}
