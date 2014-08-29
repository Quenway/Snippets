function RandomSplit($min, $max, $str){
    $a = array();
 
    while ($str != ''){
        $p = rand($min, $max);
        $p = ($p > strlen($str)) ? strlen($str) : $p;
 
        $buffer = substr($str, 0, $p);
        $str = substr($str, $p, strlen($str)-$p);
 
        $a[] = $buffer;
    }
    return $a;
}

/*
** Example:
*/
 
$test_string = 'This is a example to test the RandomSplit function.';
 
print_r(RandomSplit(1, 7, $test_string));
 
/*
Outputs something like this
(Array items are 1 to 7 characters long): 
 
Array
(
    [0] => This
    [1] =>  is
    [2] =>  a exam
    [3] => ple to
    [4] =>  test t
    [5] => he
    [6] =>  
    [7] => ran
    [8] => d_spl
    [9] => it f
    [10] => un
    [11] => ction.
)
*/
