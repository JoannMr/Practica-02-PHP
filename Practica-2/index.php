<?php

// Exercici 1

$text = "Estem aprenent PHP";

echo "Al revés: " . strrev($text);
echo "<br>";

echo "Nomes: " . substr($text, 6);
echo "<br>";

$textModificat = str_replace("PHP", "programació", $text);
echo "Modificat: " . $textModificat;
echo "<br>";

// Exercici 2

$a = 15;
$b = 4;

$c = $a * $b;

$c += $b;

$d = $c / $b;

echo "El valor final de d és: $d<br>";
if ($d >= 10) {
    echo "El valor de d és major o igual a 10.";
} else {
    echo "El valor de d és menor que 10.";
}

// Exercici 3

$alumne = [
    "nom" => "Anna",
    "edat" => 20,
    "nota" => 8.5
];

echo "Nom: " . $alumne["nom"];
echo "<br>";

$alumne["curs"] = "DAW";

echo "Total d'elements: " . count($alumne);
echo "<br>";

$alumne["edat"] = 18;

print_r($alumne);

?>


