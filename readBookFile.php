<?php

$file_name = "book.txt";
$myfile = fopen ($file_name, "a") or die("Unable to open file");
$myfile = fopen ("book.txt" , "r") or die("Unable to open file");

$data = fread ($myfile,filesize ($file_name)); 

echo $data; 
fclose ($myfile);
?>
