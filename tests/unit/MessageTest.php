<?php

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    public function testAmountOfMessages()
    {
        include '././app/script.php';
        $output = $outputData;
        $expected = json_encode([3, 3, 3, 2, 0.5]);
        $this->assertEquals($expected, $output);
    }

}
