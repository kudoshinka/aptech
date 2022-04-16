<?php
$data = file("question.txt") or die("Khong doc duoc file");

		array_shift($data);


		$arrQuestion = array();

foreach ($data as $key => $value) {
	$tmp = explode("|", $value);
	$id = $tmp[0];
	$question =$tmp[1];
	$arrQuestion[$id] = array("question" => $question);
	
}

