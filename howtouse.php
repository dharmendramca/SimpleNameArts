<?php
//Include require class;
require_once("SimpleNameArts.php");
$simple=new SimpleNameArts;

echo $simple->design(['name'=>'Hello World',
	'bg'=>'d3', 
	'fontsize'=>72, 
	'left'=>50,
	'right'=>50]);

?>

