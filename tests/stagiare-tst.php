<?php
use PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase{
    public function testaddition(): void{
        $result = 2+3;
        $this->assertEqualts(5,$result);
    }
}