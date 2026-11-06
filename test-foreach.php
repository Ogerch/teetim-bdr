<?php

//  tableau simple

$fruits = [
    "Pamplemousse",
    "grenade",
    "kiwi",
];

foreach($fruits as $unFruit)
{
    echo "<p>$unFruit</p>";
};



// Tableau associatif 

$groupe = [
    "e987656" => "Marc Morin",
    "e123456" => "Bob",
    "e789012" => "Charlie"
];

foreach($groupe as $noDossier => $nomPersonne)
{
    echo "<p>$nomPersonne (<i>$noDossier</i>) </p>";
}
?>