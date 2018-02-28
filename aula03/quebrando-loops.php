<?php 

echo "<pre>";
for ($cont = 0; $cont <= 10; $cont++){
	if ($cont == 5) {
		continue;
	}
	echo $cont . "\n";
}
for ($cont = 0; $cont <= 10; $cont++){
	if ($cont == 5) {
		break;
	}
	echo $cont . "\n";
}