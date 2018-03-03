<?php 

function negrito(){
	echo "<strong>Negrito</strong> <br>";
}

negrito();

function italico($valor = "valor",$valor2 = "valor2"){
	echo "<i><b>{$valor} - {$valor2}</b></i><br>";
}

italico("Italico");
italico("4Linux");
italico("um par","dois par");
italico();

echo "<hr>";

function quadrado($num){
	return pow($num,2);
}
function cubo($num){
	return $num * $num * $num;
}
// function potencia($num,$potencia){
// 	$numero;
// 	for ($i=0; $i < $potencia; $i++) { 
// 		$numero = $numero * $num;
// 	}
// 	return $numero;
// }

// $var = potencia(2,3);
// echo $var;

$taxa = 1.09;

function taxar($valor){
	global $taxa;
	return $valor + $taxa;
}

echo taxar(10);

echo "<hr>";

function adicionar(&$fruta){
	return ++$fruta;
}

$laranjas = 5;
adicionar($laranjas);
echo $laranjas;
$limao = 10;
adicionar($limao);
echo $limao;

echo "<hr>";

$array = [1,2,3,4,5,6];
$pares = array_filter($array,function($valor){
	if ($valor % 2 == 0){
		return $valor;
	}
});
print_r($pares);

echo "<hr>";

$msg = "Olá";

$func = function($a) use ($msg){
	// $msg = "Hello";
	echo $msg.$a;
};

$func("4Linux");