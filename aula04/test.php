<?php 

function olaMundo($nome){
	echo "Olá 4Linux : $nome <br>";
}

// olaMundo("Lucas");
// olaMundo("joão");
// olaMundo("josé");

function isMaiorIdade($idade){
	if($idade >= 21){
		return true;
	}else {
		return false;
	}
}

function isAprovado($nota,$frequencia){
	if ($nota > 8 && $frequencia > 8) {
		return true;
	}
	return false;
}
function isReprovado($nota,$frequencia){
	if ($nota > 8 && $frequencia > 8) {
		return true;
	}
	return false;
}

$idade = readline("Idade: ");

if (isMaiorIdade($idade)) {
	echo "Maior Idade";
} else {
	echo "Menor idade";
}