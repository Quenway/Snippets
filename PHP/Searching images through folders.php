<?

$dirs = array_filter(glob('*'), 'is_dir');
//print_r($dirs);

foreach ($dirs as $value) {
    echo '<a href="index.php?gallery='.$value.'">'.$value.'</a><br/>';
}

echo "<br/><br/><br/>";

if($_GET['gallery'] != ""){

$main= $_GET['gallery'].'/';  
$string =array();

$dir = opendir($main);
while ($file = readdir($dir)) { 
   if (eregi("\.png",$file) || eregi("\.jpg",$file) || eregi("\.gif",$file) ) { 
   $string[] = $file;
   }
}
while (sizeof($string) != 0){
  $img = array_pop($string);
  echo "<img src='$main$img'  width='200px'/>";
	}
}
?>
