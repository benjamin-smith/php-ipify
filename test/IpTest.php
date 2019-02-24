<?php

namespace Ipify\Test;

use Ipify\Ip;
use Ipify\Settings;
use PHPUnit\Framework\TestCase;

class IpTest extends TestCase
{

    public function testReturnsIpAddressString()
    {
        $this->assertTrue(is_string(Ip::get()));
    }

    /**
     * @expectedException \Ipify\Exception\ConnectionError
     */
    public function testRaisesConnectionErrorOnConnectionError()
    {
        Settings::$endpoint = 'https://api.asdgasggasgdasgdsasgdasdfadfsda.com';
        Ip::get();
    }

    /**
     * @expectedException \Ipify\Exception\ServiceError
     */
    public function testRaisesServiceErrorOnServiceError()
    {
        Settings::$endpoint = 'https://api.ipify.org/woo';
        Ip::get();
    }

}
