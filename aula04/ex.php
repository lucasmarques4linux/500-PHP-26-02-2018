<?php 

echo "<pre>";
// Array $pessoa -> Nome, Idade, Email.
// Exibir na tela o conteúdo de cada informação seguindo o exemplo: 'Meu nome é: ';
//					'Tenho $x anos'
// 					'Meu email é:';

$pessoa = [
	"nome" => "Lucas", 
	"idade" => 24, 
	"email" => "lucasmarques73@hotmail.com"
	];

// print_r($pessoa);
echo "Meu nome é: " . $pessoa['nome'] . "<br>";
echo "Tenho " . $pessoa['idade'] . " anos <br>";
echo "Meu email é: " . $pessoa['email'];

echo "<hr>";
// array pessoaS onde teremos 3 pessoas.
// cada pessoa possui Nome, Idade e Email.
// Exibir na tela o conteúdo de cada informação seguindo o exemplo: 'Meu nome é: ';
//					'Tenho $x anos'
// 					'Meu email é:';

$pessoas = [
	[
	"nome" => "Lucas", 
	"idade" => 24, 
	"email" => "lucasmarques73@hotmail.com"
	],
	[
	"nome" => "Lucas", 
	"idade" => 24, 
	"email" => "lucasmarques73@hotmail.com"
	],
	[
	"nome" => "Lucas", 
	"idade" => 24, 
	"email" => "lucasmarques73@hotmail.com"
	],
];

// print_r($pessoas);
foreach ($pessoas as $pessoa){
	echo "Meu nome é:$pessoa['nome']<br>";
	echo "Tenho " . $pessoa['idade'] . " anos <br>";
	echo "Meu email é: " . $pessoa['email'];
}

