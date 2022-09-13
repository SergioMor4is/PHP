<?php
// Constantes
define("NOME", "Sérgio Morais");
define("IDADE", 24);
define("ALTURA", 1.84);
define("TIMES", ['Real Madrid', 'Corinthians', 'PSG']);

echo NOME;
echo "<hr>";
echo TIMES[1];

function exibeNome(){
	echo NOME;
}

exibeNome();