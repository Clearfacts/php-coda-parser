<?php

namespace Codelicious\Tests\Coda\DetailParsers;

use Codelicious\Coda\Data\Raw\NewSituation;

class NewSituationParserTest extends \PHPUnit_Framework_TestCase
{
    public function testSample1()
    {
        $factory = $this->getMock('Codelicious\Coda\Data\RawDataFactory');
        $factory
            ->expects($this->once())
            ->method('createDataObject')
            ->will($this->returnValue(new NewSituation()))
        ;

        $parser = new \Codelicious\Coda\DetailParsers\NewSituationParser($factory);

        $sample = "8225001548226815 EUR0BE                  1000000500012100120515                                                                0";

        $this->assertEquals(TRUE, $parser->accept_string($sample));

        $result = $parser->parse($sample);

		$this->assertEquals("225", $result->statement_sequence_number);
		$this->assertEquals("001548226815", $result->account_number);
        $this->assertEquals(FALSE, $result->account_is_iban);
        $this->assertEquals("EUR", $result->account_currency);
        $this->assertEquals("BE", $result->account_country);
        $this->assertEquals(-500012.100, $result->balance);
        $this->assertEquals("2015-05-12", $result->date);
    }
}
