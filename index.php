<?php
// commentaire sur une ligne
/*commentaires sur
plusieurs lignes */

echo "Hello world !<br>";

// LES VARIABLES
$maVariable = "hello<br>";

// Constante
define("PRENOM", "Mathieu"); //Ancienne version
const AGE = 36;

//Les chaines de caractères
$chaine = "Je suis une chaine de caractères";

// Concaténation
$nouvelleChaine = "Chaine précèdente :" .$chaine. "<br>";
echo $nouvelleChaine;

// interpolation
$autreConcatenation = "Chaine précèdente : $chaine <br>";

echo $autreConcatenation;

// LES TABLEAUX

// Les tableaux indexés
$array = ["coucou", 456, false, "recoucou"];
print_r($array);
echo "<br>2ème élément dans le tableau : ". $array[1]. "<br>";

// Les tableaux associatifs (c'est comme un objet JS
$object = [
        "prenom" => "Mathieu",
    "age" =>36,
    "ville" => "Contres"
];
print_r($object);
echo "<br>Ville : " .$object['ville'] . "<br>";

// Les opérateurs arithmétiques
echo "Addition : ".(4+5). "<br>";
echo "Puissance : " . (4**5) . "<br>";
echo "Puissance : " . pow(4,5) . "<br>";

// Les opérateurs d'affectation
$total = 0;
echo $total ."<br>";
$total = $total+1;
echo $total ."<br>";

$total += 5;
echo $total ."<br>";

// Les structures de contrôle (conditions)
$x = 3;
$y = 2;

if ($x > $y){
    echo "X est plus grand que Y<br>";
} elseif ($y > $x){
    echo "Y est plus grand que X<br>";
} else {
    echo "X et Y sont égaux<br>";
}

$bool = false;
if ($bool){
    echo "bool est faux<br>";
} else {
    echo "bool est vrais<br>";
}
if (!$bool) {
    echo "bool est faux mais l'inverse est vrai<br>";
}

$x=4;
$y="4";
// permet de tester l'égalité en valeur ou en type
if ($x !==$y){
    echo "x et y sont différents en type (ou en valeur)";
}

// Opérateurs logiques (|| &&)
$x=3;
$y=5;
if ($x<$y || $x>5){
    echo "X remplit au moins une des conditions<br>";
}

if ($x<$y && $x>2){
    echo "X remplit les 2 conditions<br>";
}

// Les structures itératives (boucles)

//Bloucles for
for ($i=0; $i<10; $i++){
    echo "i = $i<br>";
}

//tableau avec boucle for
$tabBoucle =[];
for ($i = 0; $i<10; $i++){
    $tabBoucle[] = $i * 2;
}
echo "<pre>";
print_r($tabBoucle);
echo "</pre>";

// Lecture de tableau avec foreach
foreach ($tabBoucle as $valeur) {
    echo "Valeur du tableau : $valeur <br>";
}

// Les fonctions
function maFonction(){
    echo "j'execute une fonction <br>";
}
maFonction();

//Fonction avec return
function returnFunction(){
    $message = "coucou";
    return $message;
}
$retour = returnFunction();
echo $retour."<br>";

//Fonction annonyme
$returnFunction2 = function (){
    return "fonction annonyme<br>";
};
$retour2 = $returnFunction2();
echo $retour2;

// Les fonctions fléchées
$addition = fn($a, $b) => $a + $b;
echo "Addition : ".$addition(5,7);