/**
 * Merges two strings in a way that a pattern like ABABAB will be
 * the result.
 *
 * @param     string    $str1   String A
 * @param     string    $str2   String B
 * @return    string    Merged string
 */  
function MergeBetween($str1, $str2){
 
    // Split both strings
    $str1 = str_split($str1, 1);
    $str2 = str_split($str2, 1);
 
    // Swap variables if string 1 is larger than string 2
    if (count($str1) >= count($str2))
        list($str1, $str2) = array($str2, $str1);
 
    // Append the shorter string to the longer string
    for($x=0; $x < count($str1); $x++)
        $str2[$x] .= $str1[$x];
 
    return implode('', $str2);
}

print MergeBetween('abcdef', '__') . "\n";
print MergeBetween('__', 'abcdef') . "\n";
print MergeBetween('bb', 'aa') . "\n";
print MergeBetween('aa', 'bb') . "\n";
print MergeBetween('a', 'b') . "\n";
 
/*
Output:
 
a_b_cdef
a_b_cdef
baba
abab
ab
*/
