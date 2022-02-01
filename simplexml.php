<?php
// SIMPLEXML con generatore2
include "memcheck.php";
$start = time();

$xml = simplexml_load_file('randomgen2.xml');

foreach($xml->object as $object) {
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

    //and here we have everything we wanted to acquire for an object...
}

var_dump("Mem in MiB: " . round((processPeakMemUsage() / 1024)));
var_dump("Time in seconds:  " . (time() - $start));
