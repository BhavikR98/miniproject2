<?php
namespace gg346;
use gg346\file\csvLoad;
use gg346\html\table;
class bootstrap
{
    public function __construct(string $filePath)
    {
        $records =  csvLoad::returnArray($filePath);

        $record = array('year' => '2019', 'Make' => 'Audi', 'A6' => 'yes');
        $object = factory\recordFactory::create($record);
        print_r($object);
        echo table::table('stuff');
    }
}