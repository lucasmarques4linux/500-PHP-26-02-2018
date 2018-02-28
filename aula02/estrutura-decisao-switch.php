<?php 

$nome = readline("Digite seu nome: ");

switch ($nome) {
	case 'Lucas':
		echo "Eae Lucas";
		break;
	case 'Diego':
		echo "Eae Diego";
		break;
	case 'Gustavo':
		echo "Eae Gustavo";
		break;
	case 'Ze':
		echo "Eae Ze";
		break;
	default:
		echo "Eae Estranho";
		break;
}
echo "\n";