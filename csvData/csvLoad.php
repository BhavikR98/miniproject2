<?php
namespace gg346\csvData;
class csvLoad
{
    public static function returnArray(String $filePath) :array
    {
        $file = fopen($filePath,"r");
        $records = array();
        while(! feof($file))
        {
            $records[] = fgetcsv($file);
        }
        fclose($file);
        return $records;
    }
}