<?php 

echo "<pre>";
$array = ['a','c','g','b','d'];
print_r($array);
asort($array);
print_r($array);

echo "<hr>";
$array = ['a' => 0,'c' => 1,'g' => 2,'b' => 3,'d' => 4];
print_r($array);
ksort($array);
print_r($array);

echo "<hr>";
$array = ['a','c','g','b','d'];
print_r($array);
sort($array);
print_r($array);

echo "<hr>";
function par($num){
	return ($num % 2 == 0 ) ? $num : '';
}
function impar($num){
	return ($num % 2 != 0 ) ? $num : '';
}
$vetor = [1,2,3,4];
echo "Pares: <br>";
print_r(array_filter($vetor,'par'));
echo "Ímpares: <br>";
print_r(array_filter($vetor,'impar'));

echo "<hr>";
$pessoa = ['nome' => '4Linux', 'idade' => 11];
if (array_key_exists('nome', $pessoa)) {
	echo 'ok';
}

echo "<hr>";
$pessoa = ['nome' => '4Linux', 'idade' => 11];
$chave = array_search(111, $pessoa);
var_dump($chave);

echo "<hr>";
$pessoa = ['nome' => '4Linux', 'idade' => 11];
if (in_array(11, $pessoa)) {
	echo 'encontrou';
}

echo "<hr>";
$arr = [1,2,3,2,5,4];
echo count($arr);

echo "<hr>";
$data = "27/01/2018";
var_dump(explode('/', $data));
echo "<br>";
$arrData = explode('/', $data);
var_dump(implode('-', $arrData));