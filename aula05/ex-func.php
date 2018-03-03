<?php 

// função pra retornar se número é par ou impar;
// função que receba dois números e retorne o maior;
// função que receba uma idade e retorne se é maior de idade;
// função que receba um array com informações de uma pessoa e diga se ela pode dirigir.
// pessoa = ['nome','idade','temHabilitacao']


function isParImpar($num){
	if ($num % 2 == 0) {
		return "Par";
	} else {
		return "Impar";
	}
}

echo isParImpar(50);

echo "<hr>";

function maior($num1,$num2){
	if ($num1 == $num2) {
		return "Os dois são iguais";
	}else if ($num1 > $num2) {
		return "O Primeiro é maior";
	} else {
		return "O Segundo é maior";
	}
}

echo maior(10,10);
echo "<hr>";

function maiorIdade($idade){
	if ($idade >= 18) {
		return "Maior Idade";
	} else {
		return "Menor Idade";
	}
}
echo "<hr>";

// [0 => "Lucas",1 => 24]
function podeDirigir(array $pessoa){
	if ($pessoa['idade'] >= 18 && $pessoa['temHabilitacao']) {
		return "Pode Dirigir";
	} else {;
		return "Não Pode Dirigir";
	}
}

function podeDirigir2(int $idade, bool $temHabilitacao){
	if ($idade >= 18 && $temHabilitacao) {
		return "Pode Dirigir";
	} else {;
		return "Não Pode Dirigir";
	}	
}

$lucas = [
	'nome' => 'Lucas',
	'idade'=> 24,
	'temHabilitacao' => true
	];

echo podeDirigir($lucas);
echo podeDirigir2($lucas['idade'],$lucas['temHabilitacao']);