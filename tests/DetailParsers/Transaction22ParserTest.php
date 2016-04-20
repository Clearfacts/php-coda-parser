<?php

namespace Codelicious\Tests\Coda\DetailParsers;

use Codelicious\Coda\Data\Raw\Transaction22;

class Transaction22ParserTest extends \PHPUnit_Framework_TestCase
{
	public function testSample1()
	{
		$factory = $this->getMock('Codelicious\Coda\Data\RawDataFactory');
		$factory
			->expects($this->once())
			->method('createDataObject')
			->will($this->returnValue(new Transaction22()))
		;

		$parser = new \Codelicious\Coda\DetailParsers\Transaction22Parser($factory);

		$sample = "2200010000  ANOTHER MESSAGE                                           54875                       GEBCEEBB                   1 0";

		$this->assertEquals(TRUE, $parser->accept_string($sample));

		$result = $parser->parse($sample);

		$this->assertEquals("0001", $result->sequence_number);
		$this->assertEquals("0000", $result->sequence_number_detail);
		$this->assertEquals(" ANOTHER MESSAGE ", $result->message);
		$this->assertEquals("54875", $result->client_reference);
		$this->assertEquals("GEBCEEBB", $result->other_account_bic);
		$this->assertEquals("", $result->category_purpose);
		$this->assertEquals("", $result->purpose);
	}
}
