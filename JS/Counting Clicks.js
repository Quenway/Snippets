/*
Sometimes you need to know how many times the user clicks on an element.
The most common solution is to create a counter as a global variable but with jQuery
you can prevent polluting the global scope by using data() to store the counter.
*/

$(element)
    .data('counter', 0) // begin counter at zero
    .click(function() {
        var counter = $(this).data('counter'); // get
        $(this).data('counter', counter + 1); // set
        // do something else...
    });
    
    
