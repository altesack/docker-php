<?php

namespace Tests;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSum(): void
    {
        $calc = new Example();
        $this->assertSame(10, $calc->sum([1, 2, 3, 4]));
    }
}
