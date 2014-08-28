$("#more-less-options-button").click(function() {
     var txt = $("#extra-options").is(':visible') ? 'more options' : 'less options';
     $("#more-less-options-button").text(txt);
     $("#extra-options").slideToggle();
});
