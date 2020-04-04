<?php

namespace NameParse\Tests;

use PHPUnit\Framework\TestCase;
use NameParse\NameParseResult;
use NameParse\NameParseResultDetails;

class ResultsTest extends TestCase
{
    private function loadNameParseResultsDetails() {
        $details = new NameParseResultDetails();
        $details
            ->setGiven('given name')
            ->setSur('sur name')
            ->setMiddle('middle name')
            ->setTitle('title name')
            ->setInitials('initials name')
            ->setSuffix('suffix name')
            ->setPrecursor('precursor name');
        return $details;
    }

    public function testValidateDetailsGetterSetter()
    {
        $details = $this->loadNameParseResultsDetails();

        $this->assertEquals('given name',$details->getGiven());
        $this->assertEquals('sur name',$details->getSur());
        $this->assertEquals('middle name',$details->getMiddle());
        $this->assertEquals('title name',$details->getTitle());
        $this->assertEquals('initials name',$details->getInitials());
        $this->assertEquals('suffix name',$details->getSuffix());
        $this->assertEquals('precursor name',$details->getPrecursor());
    }

    public function testValidateResultsGetterSetter()
    {
        $details = $this->loadNameParseResultsDetails();

        $npr = new NameParseResult();
        $npr->setDetails($details)
            ->setFirst('first name parsed')
            ->setLast('last name parsed')
            ->setMiddle('middle name parsed');

        $this->assertEquals('first name parsed',$npr->getFirst());
        $this->assertEquals('last name parsed',$npr->getLast());
        $this->assertEquals('middle name parsed',$npr->getMiddle());
        $this->assertEquals($npr->getDetails(), $details);
    }
}