<?php
include "polacz.php";
$nr = wczytaj("nr");
$marka = wczytaj("marka");
$model = wczytaj("model");
$kolor = wczytaj("kolor");
$rocznik = wczytaj("rocznik");
$cena = wczytaj("cena");
$wyposazenie = wczytaj("wyposazenie");

$sql = $baza->prepare("INSERT INTO samochody VALUES (?, ?, ?, ?, ?, ?, ?);");
if ($sql)
{
        $sql->bind_param("issidss", $nr, $model, $marka, $rocznik, $cena, $kolor, $wyposazenie);
        $sql->execute();
        $sql->close();
}
$baza->close();
header ("Location: http://localhost/xd/index.php");
?>