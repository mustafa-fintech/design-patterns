<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\Tests;

use App\State\Context;
use App\State\DataBase;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testIsCreatedWithStateDatabase()
    {
        $context = new Context(new DataBase());
        $this->assertSame('database', $context->getState());
    }

    public function testCanProceedToStateFile()
    {
        $context = new Context(new DataBase());
        $context->request1();

        $this->assertSame('file', $context->getState());
    }

    public function testStateDatabaseIsTheLastPossibleState()
    {
        $context = new Context(new DataBase());
        $context->request1();
        $context->request2();
        $context->request1();
        $context->request2();

        $this->assertSame('database', $context->getState());
    }
}