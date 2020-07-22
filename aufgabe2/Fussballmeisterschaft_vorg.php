<?php

$jahr = $_POST["TxtJahr"];
$aktuellesJahr=date("Y");   // über date() kann auf die Systemuhr zugegriffen werden; "Y" steht für "Year"

if ($jahr >= 1930) {
	if ($jahr % 4 == 0 && $jahr >= 1960) { //$jahr ist ohne Rest ganzzahlig durch 4 teilbar
		if ($jahr <= $aktuellesJahr) {
			echo "In diesem Jahr fand eine Fussball-Europameistermeisterschaft statt";
		} else { 
			echo "In diesem Jahr wird eine Fussball-Europameistermeisterschaft stattfinden";
		}
	} elseif ($jahr % 4 == 2) {  //Die ganzzahlige Division von Jahr durch 4 ergibt den Rest 2
		if ($jahr <= $aktuellesJahr) {
			echo "In diesem Jahr fand eine Fussball-Weltmeistermeisterschaft statt";
		} else { 
			echo "In diesem Jahr wird eine Fussball-Weltmeistermeisterschaft stattfinden";
		}
	} elseif ($jahr % 4 == 1) { //Die ganzzahlige Division von Jahr durch 1 ergibt den Rest 1
		echo "In diesen Jahr fand kein Turnier stat 1";

	} else { // Alles andere
		echo "In diesen Jahr fand kein Turnier statt 2";
	}
	
} else {
	echo "Die Fussballweltmeisterschaften finden ab dem Jahr 1930 statt <br>
	Die Fussballeuropameisterschaften finden ab dem Jahr 1960 statt";
}

