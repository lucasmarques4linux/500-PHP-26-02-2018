<?php 

// Nota
// Frequencia
// Se aprovado - Nota >= 7 e Frequencia >= 8
// Recuperacao - Nota >= 5 e < 7 e Frequencia >= 8
// Se Reprovado - Nota < 5 ou Frequencia < 8

$nota = readline("Digite a nota: ");
$frequencia = readline("Digite a frequencia: ");

if ($nota >= 7 && $frequencia >= 8) {
	echo "Aprovado";
} else if ($nota >= 5 && $nota < 7 && $frequencia >= 8){
	echo "Recuperacao";
} else if ($nota < 5 || $frequencia < 8){
	echo "Reprovado";
}

echo "\n";

switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
		echo "Aprovado";
		break;
	case ($nota >= 5 && $nota < 7 && $frequencia >= 8):
		echo "Recuperacao";
		break;
	case ($nota < 5 || $frequencia < 8):
		echo "Reprovado";
		break;
	default:
		break;
}
echo "\n";


