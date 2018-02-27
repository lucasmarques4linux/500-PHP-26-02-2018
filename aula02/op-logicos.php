<?php 

echo "<pre>";
var_dump(true and true);
var_dump(true and false);
var_dump(true && true);
var_dump(true && false);
echo "<hr>";
var_dump(true or true);
var_dump(true or false);
var_dump(true || true);
var_dump(true || false);
var_dump(false || false);
echo "<hr>";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);
echo "<hr>";
var_dump(!true);
var_dump(!false);