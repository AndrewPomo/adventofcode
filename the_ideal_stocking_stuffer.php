<?php 

$secretKey = 'iwrupvqb';
$answer = 0;
$done = false;
while ($done == false) {
	$answer++;
	$input = $secretKey.$answer;
	$hash = md5($input);
	$firstFive = substr($hash, 0, 5);
	if ($firstFive === "00000") {
		$done = true;
	}
	echo $hash;
	echo "$firstFive\n";
}

echo $input;
 ?>