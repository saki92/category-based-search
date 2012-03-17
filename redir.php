<?php

$list=array();
$file=fopen(__DIR__."/url.txt", "r");

while (!feof($file)) {
	$line=fgets($file);
	array_push($list,$line);}
array_pop($list);

function random_page($page_url) {
	header("Location:http://www.en.wikipedia.org/wiki/$page_url");}

$rand_page=array_rand($list);
random_page($list[$rand_page]);
fclose($file);

