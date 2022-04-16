<?php
$data = file("options.txt") or die("Khong doc duoc file");

	array_shift($data);

	$arrOptions = array();
	foreach ($data as $key => $value) {
		$tmp = explode("|", $value);
		$questionID = $tmp[0];
		$optionsID 	= $tmp[1];
		$anser 		= $tmp[2];
		$point 		= $tmp[3];

		$arrOptions[$questionID][$optionsID]["option"] = $anser;
		$arrOptions[$questionID][$optionsID]["point"] = $point;
		

	}

