<?php 

echo "<pre>";
$senha = '123';
print_r(md5($senha));
echo "<br>";
print_r(md5($senha));
echo "<br>";
print_r(md5($senha));
echo "<hr>";
$senha = '123';
print_r(sha1($senha));
echo "<br>";
print_r(sha1($senha));
echo "<br>";
print_r(sha1($senha));
echo "<hr>";
$senha = '123';
print_r(hash('md5',$senha));
echo "<br>";
print_r(hash('sha1',$senha));