Do something for each empty element found:

$('*').each(function() {
         if ($(this).text() == "") {
                   //Do Something
         }
});

TRUE or FALSE if element is empty:

var emptyTest = $('#myDiv').is(':empty');
