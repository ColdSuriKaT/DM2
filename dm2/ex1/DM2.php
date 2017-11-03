<?php
// Fonctions de contrôle des restes

function checkIfNumberReturn1WhenMod6($numberToTry) {
	if ($numberToTry % 6 == 1) {
		return true;
	} else {
		return false;
	}
}
function checkIfNumberReturn6WhenMod11($numberToTry) {
	if ($numberToTry % 11 == 6) {
		return true;
	} else {
		return false;
	}
}

// Début du programme.

$isOkay = false; // La consigne est : Trouver un nombre ou le modulo 6 retourne 1 et ou le modulo 11 retourne 6
for ($numberToTry = 1; $isOkay == false; $numberToTry++) {
	echo '-------------------------------------- <br />';
	if(checkIfNumberReturn1WhenMod6($numberToTry) == true) {
		if (checkIfNumberReturn6WhenMod11($numberToTry) == true) {
			echo $numberToTry . ' est le nombre recherché. <br />';
			exit();
		} else {
			echo $numberToTry . ' ne répond pas aux critères (Ne passe pas le mod 11) <br />';
		}
	} else {
		echo $numberToTry . ' ne répond pas aux critères (Ne passe pas le mod 6) <br />';
	}
}
?>
