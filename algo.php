<?php
// EXERCICE 1
echo "EXERCICE 1";
echo "<br>";

$mois = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre");
print_r($mois);
echo "<br>";
var_dump($mois);

// EXERCICE 2
echo "<br>";
echo "<br>";
echo "EXERCICE 2";
echo "<br>";

echo $mois[2];

// EXERCICE 3
echo "<br>";
echo "<br>";
echo "EXERCICE 3";
echo "<br>";
echo $mois[5];

// EXERCICE 4
echo "<br>";
echo "<br>";
echo "EXERCICE 4";
echo "<br>";

$mois[7] = "août";
echo $mois[7];


// EXERCICE 5
echo "<br>";
echo "<br>";
echo "EXERCICE 5";
echo "<br>";

$HautsFrance = array(
    02 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme",
);

print_r($HautsFrance);
echo "<br>";
var_dump($HautsFrance);


// EXERCICE 6
echo "<br>";
echo "<br>";
echo "EXERCICE 6";
echo "<br>";

echo $HautsFrance[59];

// EXERCICE 7
echo "<br>";
echo "<br>";
echo "EXERCICE 7";
echo "<br>";

$HautsFrance[51] = "Reims";

print_r($HautsFrance);
echo "<br>";
var_dump($HautsFrance);


// EXERCICE 8
echo "<br>";
echo "<br>";
echo "EXERCICE 8";
echo "<br>";

foreach ($mois as &$value) {
    echo $value;
    echo "<br>";
};


// EXERCICE 9
echo "<br>";
echo "<br>";
echo "EXERCICE 9";
echo "<br>";

foreach ($HautsFrance as &$value) {
    echo $value;
    echo "<br>";
};


// EXERCICE 10
echo "<br>";
echo "<br>";
echo "EXERCICE 10";
echo "<br>";

foreach ($HautsFrance as $numero => $nom) {
    echo "Le département {$nom} a le numéro {$numero}<br>";
}