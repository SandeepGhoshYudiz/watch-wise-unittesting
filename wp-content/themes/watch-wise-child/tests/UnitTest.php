<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../functions-unit-testing.php';
class UnitTest extends TestCase
{
    public function test_add_numbers()
    {
        $result = add_numbers(2, 3);
        $this->assertEquals(5, $result);
    }
}
