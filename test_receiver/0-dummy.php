<?php

extract($_REQUEST);
$file=fopen("liveFeed.php","w");
if ($circuitOne=='On')
{
    fwrite($file,'$circuitOne:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitOne:');
    fwrite($file, '0,' ."\n");
}
$mainVoltage = "mainVoltage:".$_POST['mainVoltage'];


fwrite($file, $mainVoltage);

fclose($file);

header("location: al.php");
?>
