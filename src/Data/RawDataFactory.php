<?php

namespace Codelicious\Coda\Data;
use Codelicious\Coda\Data\Raw\Identification;
use Codelicious\Coda\Data\Raw\Message;
use Codelicious\Coda\Data\Raw\NewSituation;
use Codelicious\Coda\Data\Raw\OriginalSituation;
use Codelicious\Coda\Data\Raw\Statement;
use Codelicious\Coda\Data\Raw\Summary;
use Codelicious\Coda\Data\Raw\Transaction;
use Codelicious\Coda\Data\Raw\Transaction21;
use Codelicious\Coda\Data\Raw\Transaction22;
use Codelicious\Coda\Data\Raw\Transaction23;
use Codelicious\Coda\Data\Raw\Transaction31;
use Codelicious\Coda\Data\Raw\Transaction32;
use Codelicious\Coda\Data\Raw\Transaction33;

/**
 * Class RawDataFactory
 */
class RawDataFactory implements DataFactory
{
    /**
     * @param string $dataObject
     * @return mixed
     */
    public function createDataObject($dataObject)
    {
        switch ($dataObject) {
            case DataFactory::IDENTIFICATION:
                return new Identification();
            case DataFactory::MESSAGE:
                return new Message();
            case DataFactory::ORIGINAL_SITUATION:
                return new OriginalSituation();
            case DataFactory::TRANSACTION21:
                return new Transaction21();
            case DataFactory::TRANSACTION22:
                return new Transaction22();
            case DataFactory::TRANSACTION23:
                return new Transaction23();
            case DataFactory::TRANSACTION31:
                return new Transaction31();
            case DataFactory::TRANSACTION32:
                return new Transaction32();
            case DataFactory::TRANSACTION33:
                return new Transaction33();
            case DataFactory::NEW_SITUATION:
                return new NewSituation();
            case DataFactory::SUMMARY:
                return new Summary();
            case DataFactory::STATEMENT:
                return new Statement();
            case DataFactory::TRANSACTION:
                return new Transaction();
        }
    }
}