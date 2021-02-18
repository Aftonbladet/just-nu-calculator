<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class JustNuTest extends TestCase
{
    public function testFunction()
    {
        $mock = $this->getMockBuilder(Aftonbladet\JustNu::class)
        ->onlyMethods(['getContents'])
        ->getMock();

        $mock->expects($this->once())
        ->method('getContents')
        ->will($this->returnValue(file_get_contents(dirname(__FILE__) . '/ab-example-content.html'))); //Whatever value you want to return

        $this->assertEquals(3, $mock->getCount());
    }
}
