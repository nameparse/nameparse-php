<?php

namespace NameParse\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use NameParse\NameParse;

define('KEY','d605368416f14149ad8c1ae157c027a3f3db8e8d296940de9cb44b0e851d40d4');

class ParseTest extends TestCase
{
    public function testParseTwoNames()
    {
        $np = new NameParse(['key'=>KEY]);
        $result = $np->parse("Chris Schuld");
        $this->assertEquals("Chris", $result->getFirst());
        $this->assertEquals("Schuld", $result->getLast());
    }

    public function testParseThreeNames()
    {
        $np = new NameParse(['key'=>KEY]);
        $result = $np->parse("Christopher Brian Schuld");
        $this->assertEquals("Christopher", $result->getFirst());
        $this->assertEquals("Brian", $result->getMiddle());
        $this->assertEquals("Schuld", $result->getLast());
    }

    public function testInvalidApiCode()
    {
        $this->expectException(Exception::class);

        $np = new NameParse(['key'=>KEY."bad_key"]);
        $result = $np->parse("Christopher Brian Schuld");
        $this->assertEquals("Christopher", $result->getFirst());
        $this->assertEquals("Brian", $result->getMiddle());
        $this->assertEquals("Schuld", $result->getLast());
    }
}