<?php

$jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
$data = json_decode($jsonData,true);

$srilankaData = file_get_contents("https://hpb.health.gov.lk/api/get-current-statistical");
$lankaData = json_decode($srilankaData,true);

foreach($data as $key => $value){
    $days = count($value) -1;
    $days_prev = $days -1;
}

$confirmed = 0;
$recovered = 0;
$deaths = 0;

foreach($data as $key => $value){
    $confirmed = $confirmed + $value[$days]['confirmed'];
    $recovered = $recovered + $value[$days]['recovered'];
    $deaths = $deaths + $value[$days]['deaths'];
}
?>