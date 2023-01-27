Exercice 0) 
Déclarez une variable égale Ã  5. Affichez ce rÃ©sultat.

<?php
$resultat = 5;
echo $resultat;
?>


Exercice 1)

DÃ©clarez votre amour Ã  Simplon Ã  travers la phrase suivante "Simplon c'est la vie." en respectant la mÃªme syntaxe au caractÃ¨re prÃ¨s. 
Vous devez pour cela uniquement utiliser les variables suivantes :

<?php
$word = "c'est ";
$word2 = "vie.";
$word3 = "Simplon";
$word4 = "la";

echo "$word3 $word $word4 $word2";
?>

Exercice 2)
Voici 2 variables, comment obtenir le nombre 3 en utilisant 1 seule fois ces 2 variables ?

<?php
$variable1=12;
$variable2=4;

echo ($variable1/$variable2);
?>

Exercice 3)
$var="clement";
$var1= "extrapolation";
Comment puis-je obtenir 20 en utilisant 1 seule fois ces 2 variables ?

<?php
$var="clement";
$var1= "extrapolation";
echo strlen("$var $var1")-1;
?> 

Exercice 4)
Complétez ce code afin de faire apparaître la phrase "je maÃ®trise tellement le code maintenant

<?php
    $maitrise_du_code = 1000;

    if ($maitrise_du_code >= 6) {
    echo "Je maÎtrise tellement le code maintenant";
 };
?> 

Exercice 5)
A l'aide des variables Ã  disposition et de la programmation PHP, intervertissez le chiffre de sandrine avec celui de Xavier. 
Retirer ensuite le chiffre de Xavier concatÃ©nÃ© avec celui de Andre Ã  celui de Sandrine. 
Affichez ensuite le rÃ©sultat si celui-ci est infÃ©rieur Ã  50 uniquement.
<?php
$chiffre_fetiche_sandrine = 7;
$chiffre_fetiche_xavier = 130;
$chiffre_fetiche_andre = 8;

$temp = $chiffre_fetiche_sandrine;
$chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
$chiffre_fetiche_xavier = $temp;

$concat = ($chiffre_fetiche_xavier .$chiffre_fetiche_andre .$chiffre_fetiche_sandrine);

if ($concat < 50){
    echo $concat;
};
?>

Exercice 6)
Traduisez cette phrase en programmation PHP. Si votre compte en banque est supÃ©rieur Ã  0 alors j'afficherai un petit message qui dit "bravo, vous Ãªtes un bon gestionnaire".
Sinon j'afficherai un message qui dit "Vous faites vraiment n'importe quoi avec votre argent".
<?php
$compte = -100;
if ($compte < 0) {
    echo "Bravo, vous Ãªtes un bon gestionnaire";
} else {
    echo "Vous faites vraiment n'importe quoi avec votre argent";
};
?>

Exercice 7)
$vent = ?;
$houle = ?;
$cadence_vague = ?;

DÃ©finissez un petit programme permettant de savoir si les conditions sont bonnes pour aller surfer.
Vous afficherez un petit message en consÃ©quence. 
Les donnÃ©es des variables ne sont volontairement pas dÃ©finies (?) afin qu'on puisse les modifier. Votre programme doit toujours fonctionner.
Si le vent est Ã  plus de 30 km/h, alors il faut s'assurer que la houle ne dÃ©passe pas les 20. 
Si c'est le cas et que la candence des vagues est au moins de 10, on peut aller surfer.
Si le vent est Ã  moins de 30 km/h, alors la houle ne doit juste pas dÃ©passer les 30. 
Si c'est le cas, la cadence des vagues peut aller jusqu'Ã  8. 
Dans les autres cas, les conditions ne sont pas bonnes pour aller surfer, affichez-le !



Exercice 8)
$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;

RÃ©alisez un programme Ã  l'aide de ces variables qui permets de :
DÃ©terminez quels sont les nombres multiples de 2 puis rÃ©alisez la soustraction entre ces nombres et ceux qui ne le sont pas.

BONUS) aider les autres Ã  trouver leurs erreurs sans JAMAIS donner la rÃ©ponse !

