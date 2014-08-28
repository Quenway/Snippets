This regex below tests the provided zip code if it starts with the numbers 096 and that there are exactly 2 numbers after it. If it does, it echos Yes, if not, it echos No. In this test case, it would echo Yes.

<?php
$zipcode='09607';
echo 'Zipcode in range?<br />';
if(preg_match('/^096[0-9]{2}$/', $zipcode))
       echo "Yes";
else
       echo "No";
?>
