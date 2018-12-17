<?php

require __DIR__.'/var-declaration.php';

if (! file_exists($jsonInput)) {
    exit('Failas nerastas');
}

foreach ($smsList as $list) {
    while (($sum + $list['income']) < $requiredIncome) {
        $sum += $list['income'];
        $smsArray[] = $list['price'];
        $smsCount = count($smsArray);
        if ($smsCount == $maxMessages) {
            break;
        }

    if ($smsCount == $maxMessages) {
        break;
    }
    }
}

if (($maxMessages == 0 or $smsCount < $maxMessages) && $sum < $requiredIncome) {
    $sum += end($smsList)['income'];
    $smsArray[] = end($smsList)['price'];
}

if ($sum < $requiredIncome) {
    exit('Žinučiu kiekio nepakanka sąskaitai apmokėti.');
}

$outputData = json_encode($smsArray);
fwrite(STDOUT, $outputData);
