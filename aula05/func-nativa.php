<?php 
echo '<pre>';
// Empty
$var = "Lucas";
if (!empty($var)) {
	var_dump("Não Vazio");
}
$var = false;
if (empty($var)) {
	var_dump("Vazio");
}
echo "<hr>";

if (!isset($var2)) {
	echo "Não existe";
}
echo "<br>";
if (isset($var)) {
	echo "existe";
}
echo "<hr>";

unset($var);
if (isset($var)) {
	echo "existe";
}

echo "<hr>";

$var = "Olá Mundo";
$var2 = str_replace("Mun", "4Linux", $var);
echo $var2;

echo "<hr>";

$var = ".......Olá...,..";
$var = trim($var,".");
echo $var;

echo "<hr>";

$var = "ola mundo!";
echo ucwords($var);

echo "<hr>";

echo strlen($var);

echo "<hr>";
$var = "ola mundo!";
echo strtoupper($var);

echo "<hr>";
echo strtolower($var);