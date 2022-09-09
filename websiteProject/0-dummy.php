<?php

extract($_REQUEST);
$file=fopen("livefeed.php","w");
if ($modeSelect=='on')
{
    fwrite($file,'$modeSelect:');
    fwrite($file, 'M,' ."\n");
}
else {
    fwrite($file,'$modeSelect:');
    fwrite($file, 'A,' ."\n");
}

if ($circuitOne=='on')
{
    fwrite($file,'$circuitOne:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitOne:');
    fwrite($file, '0,' ."\n");
}

if ($circuitTwo=='on')
{
    fwrite($file,'$circuitTwo:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitTwo');
    fwrite($file, '0,' ."\n");
}

if ($circuitThree=='on')
{
    fwrite($file,'$circuitThree:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitThree');
    fwrite($file, '0,' ."\n");
}
if ($circuitFour=='on')
{
    fwrite($file,'$circuitFour:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitFour:');
    fwrite($file, '0,' ."\n");
}
if ($circuitFive=='on')
{
    fwrite($file,'$circuitFive:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitFive:');
    fwrite($file, '0,' ."\n");
}
if ($circuitSix=='on')
{
    fwrite($file,'$circuitSix:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitSix:');
    fwrite($file, '0,' ."\n");
}
if ($circuitSeven=='on')
{
    fwrite($file,'$circuitSeven:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitSeven:');
    fwrite($file, '0,' ."\n");
}
if ($circuitEight=='on')
{
    fwrite($file,'$circuitEight:');
    fwrite($file, '1,' ."\n");
}
else {
    fwrite($file,'$circuitEight:');
    fwrite($file, '0,' ."\n");
}


fclose($file);
header("location: index.php");

?>


