<?php

$jsonFile = '../json/input.json';
$json = file_get_contents($jsonFile);
$jsonData = json_decode($json, true);

$smsPrice05 = $jsonData['sms_list'][0]['price'];
$smsPrice1 = $jsonData['sms_list'][1]['price'];
$smsPrice2 = $jsonData['sms_list'][2]['price'];
$smsPrice3 = $jsonData['sms_list'][3]['price'];

$smsIncome41 = $jsonData['sms_list'][0]['income'];
$smsIncome96 = $jsonData['sms_list'][1]['income'];
$smsIncome191 = $jsonData['sms_list'][2]['income'];
$smsIncome290 = $jsonData['sms_list'][3]['income'];

$requiredIncome = $jsonData['required_income'];
$maxMessages = $jsonData['max_messages'];

$sum = 0;
