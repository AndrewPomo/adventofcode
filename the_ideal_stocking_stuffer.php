<?php 

$secretKey = 'iwrupvqb';
$answer = 0;
$done = false;
while ($done == false) {
	$answer++;
	$input = $secretKey.$answer;
	$hash = md5($input);
	$firstSix = substr($hash, 0, 6);
	if ($firstSix === "000000") {
		$done = true;
	}
	// echo $hash;
	// echo "$firstSix\n";
}

echo $input;
 ?>