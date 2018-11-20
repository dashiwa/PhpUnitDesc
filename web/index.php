<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;


class SomeClass
{
    public function doSomething()
    {
        // Сделать что-нибудь.
    }
}


class StubTest extends TestCase
{
    public function testStub()
    {
        // Создать заглушку для класса SomeClass.
        $stub = $this->createMock(SomeClass::class);

        // Настроить заглушку.
        $stub->method('doSomething')
            ->willReturn('foo');

        // Вызов $stub->doSomething() теперь вернёт 'foo'.
        $this->assertSame('foo', $stub->doSomething());
    }
}