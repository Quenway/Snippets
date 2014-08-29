<?php
// Copyright MartyniP.co.uk
// MartyniP Martyni Productions


// First we will read the hits.txt file to find out the current number of hits
$file = "hits.txt";
$fh = fopen($file,"r");
$hits = fread($fh, 5);
fclose($fh);

// Adds 1 to the $hits
$hits++;

// Write the hits.txt file with 1 more than before
$fh = fopen($file, 'w');
fwrite($fh, $hits);
fclose($fh);

// echo out the amount of hits the sute has gotten
echo $hits;

?>
