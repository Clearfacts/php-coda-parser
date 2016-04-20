<?php

namespace Codelicious\Coda\Data;

/**
 * Interface DataFactory
 */
interface DataFactory
{
    const NEW_SITUATION = 'new_situation';
    const MESSAGE = 'message';
    const ORIGINAL_SITUATION = 'original_situation';
    const SUMMARY = 'summary';
    const TRANSACTION21 = 'transaction21';
    const TRANSACTION32 = 'transaction32';
    const TRANSACTION31 = 'transaction31';
    const TRANSACTION23 = 'transaction23';
    const TRANSACTION22 = 'transaction22';
    const TRANSACTION33 = 'transaction33';
    const IDENTIFICATION = 'identification';

    /**
     * @param string $dataObject
     * @return mixed
     */
    public function createDataObject($dataObject);
}