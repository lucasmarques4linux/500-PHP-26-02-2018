<?php 

echo "<pre>";

$array = ["Lucas","4Linux","Joao"];
$array2 = array("Lucas","4Linux","Joao");

$pessoa = ["Lucas",24 , 1.80,82,"Marques",1];
$pessoa[] = "Programador";

// print_r($pessoa);
// echo $pessoa[0];

// for ($i=0; $i < 7; $i++) { 
// 	if ($i == 1) {
// 		continue;
// 	}
// 	echo $pessoa[$i] . "\n";
// }
// echo "<hr>";

$pessoa = [
	"nome" => "Lucas",
	"idade" => 24,
	"altura" => 1.80
];

// print_r($pessoa);
// echo $pessoa['nome'];