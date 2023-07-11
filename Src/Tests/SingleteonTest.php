<?php 
namespace App\Tests;

use App\Singletone\Ping;
use PHPUnit\Framework\TestCase;

class SingleteonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Ping::connect();
        $secondCall = Ping::connect();

        $this->assertInstanceOf(Ping::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}