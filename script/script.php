<?php

include 'variables.php';
// include 'Message.php';

if (!file_exists($jsonFile)) {
    exit('Failas nerastas');
}

while (($sum + $smsIncome290) < $requiredIncome) {
    $sum += $smsIncome290;
    $smsArray[] = $smsPrice3;
    $smsCount = count($smsArray);
    if ($smsCount == $maxMessages) break;
}
// echo $smsCount;
// echo '<pre>'; print_r($smsArray); echo '</pre>';

while (($sum + $smsIncome191) < $requiredIncome) {
    if ($smsCount == $maxMessages) break;
    $sum += $smsIncome191;
    $smsArray[] = $smsPrice2;
    $smsCount = count($smsArray);
}
// echo $smsCount;
// echo '<pre>'; print_r($smsArray); echo '</pre>';

while (($sum + $smsIncome96) < $requiredIncome) {
    if ($smsCount == $maxMessages) break;
    $sum += $smsIncome96;
    $smsArray[] = $smsPrice1;
    $smsCount = count($smsArray);
}
// echo $smsCount;
// echo '<pre>'; print_r($smsArray); echo '</pre>';

while ($sum < $requiredIncome) {
    if ($smsCount == $maxMessages) break;
    $sum += $smsIncome41;
    $smsArray[] = $smsPrice05;
    $smsCount = count($smsArray);
}
// echo $smsCount;
// echo '<pre>'; print_r($smsArray); echo '</pre>';

if ($sum < $requiredIncome) {
    exit('Žinučių kiekio nepakanka sąskaitai apmokėti.');
}

$outputFile = fopen('../json/output.json', 'a') or die('Nepavyko atidaryti failo');
$outputData = json_encode($smsArray) . "\n";
fwrite($outputFile, $outputData);
fclose($outputFile);

print $outputData;
