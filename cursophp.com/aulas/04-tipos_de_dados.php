<?php
/**************Escalares**************/
//string
$nome = "Olá mundo";
var_dump($nome);
if (is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif; 
echo "<hr>";

//int
$idade = 25;
var_dump($idade);
if (is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";	 
endif;
echo "<hr>";

//float
$altura = 1.84;
var_dump($altura);
if (is_float($altura)):
	echo "É um float";
else:
	echo "Não é um float";	 
endif;
echo "<hr>";

//boolean
$admin = false;
var_dump($admin);
if (is_bool($admin)):
	echo "É um Boolean";
else:
	echo "Não é um Boolean";	 
endif;
echo "<hr>";

/**************** Compostos *******************/
//array
$carros = array("gol", "uno", "camaro", 12, 20.5, true);
var_dump($carros);
if (is_array($carros)):
	echo "É um array";
else:
	echo "Não é um array";	 
endif;
echo "<hr>";

// object
class Cliente {
	public $nome;
	public function atribuirNome($nome) {
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Sérgio");
var_dump($cliente);

/**************** Especiais ****************/
$cidade = NULL;
var_dump($cidade);