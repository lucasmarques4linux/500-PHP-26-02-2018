<?php 
echo "<pre>";

// $idade = 19;
// $carterinha = false;

// if(($idade >= 18) && $carterinha == true){
// 	echo "Maior Idade e carterinha";
// } else if ($carterinha == false) {
// 	echo "Maior idade faça carterinha";
// } else {
// 	echo "Menor Idade";
// }

$a = "Marcos Lucas";

if ($a == "Lucas") {
	echo "Olá Lucas";
} else if ($a == "Marcos"){
	echo "Olá Marcos";
} else {
	echo "Olá estranho";
}

echo "<hr>";

$idade = 14;

// MAior de 18 voto é obrigatório
// 16 e <18 voto opcional
// < 16 não vota

if ($idade >= 18 && $idade < 60) {
	echo "Voto Obrigatório";
} else if ($idade >= 16 || $idade >= 60) {
	echo "Voto Opcional";
} else if ($idade < 16){
	echo "Não vota";
} else {
	echo "Idade Inválida";
}

$num = 10;
// Se o número dividor por 2 e resto da divisão = 0
// Módulo % -> retorna o resto da divisão

if ($num % 2 === 0) {
	echo "Par";
} else {
	echo "Impar"
}






