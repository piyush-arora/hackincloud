<?php


if(isset($_GET['userInput']))
{
	$search_text = $_GET['userInput'];
	echo $search_text;
	$file = fopen('my_file.txt', 'a');
	fwrite($file, $search_text);
}


if(isset($_GET['my_data']))
{
	$file = fopen('my_file.txt', 'a');
	$data = $_GET['my_data'];
	
	fwrite($file,$data );	
	
}
?>
