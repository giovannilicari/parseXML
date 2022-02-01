<?php
// XMLREADER + SIMPLEXML
include "memcheck.php";
$start = time();

$xml = XMLReader::open('random5.xml');
//go to the first 'object' element
while ($xml->name !== 'object') { 
    $xml->read(); 
}

do {
    $object = simplexml_load_string($xml->readOuterXml());
    $id = (string) $object->id;
    $name = (string) $object->name;
    $features = [];
    foreach($object->features->feature as $feature) {
        $features[(string)$feature->id] = (string) $feature->name;
    }

    $services = [];
    foreach($object->services->service as $service) {
        $services[(string)$service->id] = (string) $service->service;
    }

    //here again we have all data of an object
} while ($xml->next('object'));

var_dump("Mem in MiB: " . round((processPeakMemUsage() / 1024)));
var_dump("Time in seconds:  " . (time() - $start));
