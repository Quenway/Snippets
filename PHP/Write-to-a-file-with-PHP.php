$myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Bobby Boppern";
fwrite($fh, $stringData);
$stringData = "Tracy Tannern";
fwrite($fh, $stringData);
fclose($fh);
