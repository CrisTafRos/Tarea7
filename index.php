<?php
	echo "<h1>Ejercicios en PHP</h1>";
	function kilometrosMillas ($kilometros){
		$millas = $kilometros/1.609;
		echo "En kilometros, la longitud es: ".$kilometros;
		echo " y equivale a: ".$millas;
		echo " millas."
		echo "<br>"
	}

	function gramosLibras ($gramos){
		$libras = $gramos/453.592;
		echo "En gramos, el peso es: ".$gramos;
		echo " y equivale a: ".$libras;
		echo " libras."
		echo "<br>"
	}

	function celsiusFarenheit ($celsius){
		$farenheit = ($celsius * 9 / 5) + 32;
		echo "En grados celsius, la temperatura es: ".$celsius;
		echo " y equivale a: ".$farenheit;
		echo " grados farenheit."
		echo "<br>"
	}

	function litrosOnzas ($litros){
		$onzas = $litros * 33.814;
		echo "En litros, la capacidad es: ".$litros;
		echo " y equivale a: ".$onzas;
		echo " onzas."
		echo "<br>"
	}

	kilometrosMillas(100);
	echo "<br/>";
	gramosLibras(20);
	echo "<br/>";
	celsiusFarenheit(30);
	echo "<br/>";
	litrosOnzas(596);
	echo "<br/>";
?>