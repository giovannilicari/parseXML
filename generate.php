<?php
//filename: generate.php

//generates a random XML with vacancies info on particular date for hotel rooms
$rooms = 100000;
$datesPerRoom = 1000;

$pregeneratedDates = [];
$date = new DateTime();
for ($i = 0; $i < $datesPerRoom ; $i++) {
    $date->modify('+1 day');
    $pregeneratedDates[] = $date->format('Y-m-d');
}

echo "<hotel>";
echo "\t<rooms>";
for ($i = 0; $i < $rooms; $i++){
    echo "\t\t<room id=\"$i\">";
        foreach($pregeneratedDates as $date) {
            echo "\t\t\t<vacancy date=\"$date\">" . mt_rand(0,1) . "</vacancy>\n";
        }
    echo "\t\t</room>";
}
echo "\t</rooms>";
echo "</hotel>";
