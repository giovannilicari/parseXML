<?php
//filename: generate2.php

//generates a random XML with vacancies info on particular date for hotel rooms
$objects = 80000;

echo "<objects>\n";
for ($i = 0; $i < $objects; $i++){
    echo "\t<object>\n";
    echo "\t\t<id>$i</id>\n";
    echo "\t\t<name>random name ".mt_rand(0,100000)."</name>\n";
    $services = mt_rand(0,10);
    if ($services > 0) {
        echo "\t\t<services>\n";
        for($j = 0; $j < $services; $j++) {
            echo "\t\t\t<service>\n";
            echo "\t\t\t\t<id>$j".mt_rand(100,200)."</id>\n";
            echo "\t\t\t\t<name>name $j</name>\n";
            echo "\t\t\t</service>\n";
        }        
        echo "\t\t</services>\n";
    } else {
        echo "\t\t<services/>\n";
    }

    $features = mt_rand(0,10);
    if ($features > 0) {
        echo "\t\t<features>\n";
        for($j = 0; $j < $features; $j++) {
            echo "\t\t\t<feature>\n";
            echo "\t\t\t\t<id>$j".mt_rand(100,200)."</id>\n";
            echo "\t\t\t\t<name>name $j</name>\n";
            echo "\t\t\t</feature>\n";
        }        
        echo "\t\t</features>\n";
    } else {
        echo "\t\t<features/>\n";
    }
    echo "\t</object>\n";
}
echo "</objects>\n";
