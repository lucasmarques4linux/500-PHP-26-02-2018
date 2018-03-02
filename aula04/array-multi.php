<?php 
echo "<pre>";
$temp = [
	'2018' => [
			'Janeiro' => 28,
			'Fevereio' => 29,
			'Marco' => 28
		],
	'2017' => [
			'Janeiro' => 27,
			'Fevereio' => 26,
			'Marco' => 30
		]
];
print_r($temp['2017']['Fevereio']);