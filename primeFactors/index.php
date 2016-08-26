<?php

header('Content-Type: application/json');
$numbers = getParams();
$decomposition = [];
$results = [];

if(count($numbers) > 1) {
	for($i=0; $i<count($numbers); $i++) {
		unset($decomposition);
		$number = $numbers[$i];
		$results[] = theBrain($number);
	}
	echo json_encode($results);
} 
else {
	$result = theBrain($numbers[0]);
	echo json_encode($result);
}

function divideBy($number, $div) {
	global $decomposition;
	if($number <= 1) return false;

	$n = $number % $div;
	if($n == 0) {
		// echo "OK \n";
		$newnum = $number / $div;
		$decomposition[] = $div;
		divideBy($newnum, $div);
	}
	else {
		// echo "NO \n";
		$newdiv = $div + 1;
		$newnum = $number;
		divideBy($newnum, $newdiv);
	}
}

function getParams() {
	$query  = explode('&', $_SERVER['QUERY_STRING']);
	$params = array();

	foreach( $query as $param )
	{
	  	list($name, $value) = explode('=', $param, 2);
	  	$params[] = urldecode($value);
	}

	return $params;
}

function theBrain($number) {
	global $decomposition;
	if(!is_numeric($number)) {
		$arr = [
			'number' => $number,
			'error' => 'not a number'
			];
	} else if($number > 1000000) {
		$arr = [
			'number' => $number,
			'error' => 'too big number (>1e6)'
			];
	} 
	else {
		// $num = log($number, 10) / log(2, 10);
		// $decomposition = [];
		// for($i=1; $i<=$num; $i++) {
		// 	$decomposition[] = 2;
		// }

		divideBy($number, 2);

		$arr = [
			'number' => $number,
			'decomposition' => $decomposition
			];
	}

	return $arr;
}
?>