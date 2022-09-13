<?php
//Array
$carros = array("BMW", "Veloster", "ix-35");
$carros[] = "T-Cross";
$carros[5] = "Nivus";
print_r($carros);
echo "<br>";

$motos = array("Yamaha", "Xt-660", "CB 300r");
echo $motos[2];
echo "<br>";


// Count
echo count($carros);
echo "<br>";

$tot_carros = count($carros);
echo $tot_carros;
echo "<br>";

//Foreach
foreach ($carros as $valor) {
 	echo $valor."<br>";
 } 

 // Arrays associativos
$pessoa = array("nome"=> "Sérgio", "idade"=> 24, "altura"=> 1.84);
$pessoa["cidade"] = "Taubaté";

foreach($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}
echo "<hr>";

//Arrays multidimensionais
$times = array(
		"sergio"=> array("França", "Real Madrid", "Corinthians"),
		"sebastiao"=> array("Brasil", "Barcelona", "Corinthians"),
		"renan"=> array("Croacia", "PSG", "São Paulo")
		);
echo $times["sergio"][1];
echo "<br>";
echo "<hr>";

foreach($times["sergio"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["sebastiao"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";

foreach($times["renan"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";	