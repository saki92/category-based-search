<?php
//$list=array("google.com","facebook.com","mediawiki.com");

$list=array();
$file=fopen("/var/www/url.txt", "r");

while (!feof($file)) {
	$line=fgets($file);
//	while(!$line) {
	array_push($list,$line);}
array_pop($list);

function random_page($page_url) {
	header("Location:http://www.en.wikipedia.org/wiki/$page_url");}

//	var_dump($list);
$rand_page=array_rand($list);
//echo $list[$rand_page];
random_page($list[$rand_page]);
fclose($file);

