<?php

namespace Ipify;

class Settings {

    public static $version = '0.1.0';

    public static $endpoint = 'https://api.ipify.org';

    public static function buildUserAgent()
    {
        return sprintf(
            'php-ipify/%s php/%s %s/%s',
            self::$version,
            phpversion(),
            php_uname('s'),
            php_uname('r')
        );
    }

}
