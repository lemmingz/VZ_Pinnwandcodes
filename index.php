<?php
	$codes = file_get_contents("http://www.studivz.net/v1/pinboard/visuals");
	$codes = substr($codes,3,strlen($codes));
	$output = json_decode($codes, TRUE);
//	var_dump($output);
	echo "<table>";
	foreach($output["items"] as $item){
		echo "<tr><td><img src=\"".$item["image"]."\"></td><td>".$item["name"]."</td></tr>";
	}
	echo "</table>";
?>
