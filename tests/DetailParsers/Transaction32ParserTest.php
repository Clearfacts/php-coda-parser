<?php

namespace Codelicious\Tests\Coda\DetailParsers;

use Codelicious\Coda\Data\Raw\Transaction32;

class Transaction32ParserTest extends \PHPUnit_Framework_TestCase
{
    public function testSample1()
    {
        $factory = $this->getMock('Codelicious\Coda\Data\RawDataFactory');
        $factory
            ->expects($this->once())
            ->method('createDataObject')
            ->will($this->returnValue(new Transaction32()))
        ;

        $parser = new \Codelicious\Coda\DetailParsers\Transaction32Parser($factory);

        $sample = "3200010001MAIN STREET 928                    5480 SOME CITY                                                                  0 0";

        $this->assertEquals(TRUE, $parser->accept_string($sample));

        $result = $parser->parse($sample);

        $this->assertEquals("0001", $result->sequence_number);
        $this->assertEquals("0001", $result->sequence_number_detail);
        $this->assertEquals("MAIN STREET 928                    5480 SOME CITY ", $result->message);
    }
}
