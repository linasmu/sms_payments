<?php

define(__DIR__, 'sms task/app');

$jsonInput = __DIR__.'/input.json';
$jsonFile = file_get_contents($jsonInput);
$jsonData = json_decode($jsonFile, true);

$smsList = array_reverse($jsonData['sms_list']);
$requiredIncome = $jsonData['required_income'];
$maxMessages = $jsonData['max_messages'];
$sum = 0;
