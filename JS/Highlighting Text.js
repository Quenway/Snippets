/*
There are many jQuery plugins to highlight text but I find this technique powerful,
easy to implement and customize and it can work without any libraries, just plain JavaScript.
The script returns the original text with the terms wrapped in a tag so they can be styled with CSS.
*/

function highlight(text, words, tag) {
 
  // Default tag if no tag is provided
  tag = tag || 'span';
 
  var i, len = words.length, re;
  for (i = 0; i < len; i++) {
    // Global regex to highlight all matches
    re = new RegExp(words[i], 'g');
    if (re.test(text)) {
      text = text.replace(re, '<'+ tag +' class="highlight">$&</'+ tag +'>');
    }
  }
 
  return text;
}

//You may also want to unhighlight text.

function unhighlight(text, tag) {
  // Default tag if no tag is provided
  tag = tag || 'span';
  var re = new RegExp('(<'+ tag +'.+?>|<\/'+ tag +'>)', 'g');
  return text.replace(re, '');
}

//These two snippets would make a great start to build your own text highlighting plugin.

//Usage:

$('p').html( highlight(
    $('p').html(), // the text
    ['foo', 'bar', 'baz', 'hello world'], // list of words or phrases to highlight
    'strong' // custom tag
));
