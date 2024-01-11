<?php

$a[] = "Schwarz Balázs";
$a[] = "Kiss Márton";
$a[] = "Bella Marcell";
$a[] = "Halír Szabolcs";
$a[] = "Bartha László";
$a[] = "Simon Attila";
$a[] = "Fehér László";
$a[] = "Krenner Dominik";
$a[] = "Tanár";
$a[] = "Gulcsik Zoltán";
$a[] = "Járfás Dániel";
$a[] = "Hadnagy Márk";
$a[] = "Topercer Márton";
$a[] = "Harsányi Ferenc";
$a[] = "Végh Szabolcs";
$a[] = "Rácz Dávid";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "no suggestion" : $hint;
?>