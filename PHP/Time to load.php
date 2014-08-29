$start = time();
 
// put a long operation in here
sleep(2);
 
 
$diff = time() - $start;
 
print "This page needed $diff seconds to load :-)";
 
// if you want a more exact value, you could use the 
// microtime function
