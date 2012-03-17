<?php

$category=array('FA','A','FL','B','GA');
$file=fopen(__DIR__."/url.txt","w");

foreach ($category as $cat) {
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://toolserver.org/~magnus/catscan_rewrite.php?categories=".$cat."-Class+India+articles&ns%5B0%5D=1&ns%5B4%5D=1&ns%5B1%5D=1&doit=1&format=json");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

	$contents=curl_exec($ch);
	curl_close($ch);
	$arr=json_decode($contents,true);

	foreach($arr["*"][0]["*"] as $value) {
		$val=$value['a']['title']."\n";
		fwrite($file,$val) or die("unable to write to file");
			}}
		fclose($file);
?>
