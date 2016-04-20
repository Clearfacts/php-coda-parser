<?php

namespace Codelicious\Tests\Coda\Data;

use Codelicious\Coda\Data\DataFactory;
use Codelicious\Coda\Data\RawDataFactory;

/**
 * Class RawDataFactoryTest
 */
class RawDataFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateDataObject()
    {
        $factory = new RawDataFactory();

        $this->assertEquals('Codelicious\Coda\Data\Raw\Identification', get_class($factory->createDataObject(DataFactory::IDENTIFICATION)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\OriginalSituation', get_class($factory->createDataObject(DataFactory::ORIGINAL_SITUATION)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Transaction21', get_class($factory->createDataObject(DataFactory::TRANSACTION21)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Transaction22', get_class($factory->createDataObject(DataFactory::TRANSACTION22)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Transaction23', get_class($factory->createDataObject(DataFactory::TRANSACTION23)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Transaction31', get_class($factory->createDataObject(DataFactory::TRANSACTION31)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Transaction32', get_class($factory->createDataObject(DataFactory::TRANSACTION32)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Transaction33', get_class($factory->createDataObject(DataFactory::TRANSACTION33)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Message', get_class($factory->createDataObject(DataFactory::MESSAGE)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\NewSituation', get_class($factory->createDataObject(DataFactory::NEW_SITUATION)));
        $this->assertEquals('Codelicious\Coda\Data\Raw\Summary', get_class($factory->createDataObject(DataFactory::SUMMARY)));
    }
}