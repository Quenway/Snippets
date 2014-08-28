//Whitespace, meaning tabs and spaces.

// Remove leading and trailing whitespace
// Requires jQuery
var str = " a b    c d e f g ";
var newStr = $.trim(str);
// "a b c d e f g"

// Remove leading and trailing whitespace
// JavaScript RegEx
var str = "   a b    c d e f g ";
var newStr = str.replace(/(^\s+|\s+$)/g,'');
// "a b c d e f g"

// Remove all whitespace
// JavaScript RegEx
var str = " a b    c d e   f g   ";
var newStr = str.replace(/\s+/g, '');
// "abcdefg"