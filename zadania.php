<?php
$liczba = "6";
$dzielenie = $liczba % 2;
$potega = $liczba ** 5;
echo $liczba . "\n" . "<br>";

echo $dzielenie . "\n" . "<br>";

echo $potega . "\n" . "<br>";

echo 'Liczba $liczba wynosi ' . $liczba . "\n" . "<br>";

if ($liczba % 2 == 0) echo "Liczba jest parzysta" . "\n" . "<br>";
else echo "Liczba jest nieparzysta" . "\n" . "<br>";

if ($liczba>0) echo "Liczba jest dodatnia" . "\n" . "<br>";
if ($liczba==0) echo "Liczba jest równa 0" . "\n" . "<br>";
if ($liczba<0) echo "Liczba jest ujemna" . "\n" . "<br>";



function dodaj($a,$b)
{
return ($a+$b);
}
$dodaj = dodaj(3,5);
echo $dodaj . "\n" . "<br>";

function odejmij($a,$b)
{
    return ($a-$b);
}
$odejmij = odejmij(10,2);
echo $odejmij . "\n" . "<br>";

function mnozenie($a,$b)
{
    return ($a*$b);
}
$mnozenie = mnozenie(2,4);
echo $mnozenie . "\n" . "<br>";

function dzielenie($a,$b)
{
    if ($b==0) return "Nie dziel przez zero cholero!";
    else return ($a/$b);
}
$dzielenie = dzielenie(16,2);
echo $dzielenie . "\n" . "<br>";

echo "\n" . "<br>";

for ($a=1; $a <=6; $a++)
{
    echo rand(1,50) . "\n" . "<br>";
}



?>