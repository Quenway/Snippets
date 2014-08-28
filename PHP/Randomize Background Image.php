1. Above the DOCTYPE
Set up and array of filenames, which correspond to the file names of the images you are trying to randomize.

<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
1. CSS in the <head>
Normally you'd want to keep CSS out of the HTML, but we'll just use it here to echo out the random file name we selected above.

<style type="text/css">
<!--
body{
background: url(images/<?php echo $selectedBg; ?>) no-repeat;
}
-->
</style>
