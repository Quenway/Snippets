$('#my-selector').bind('click', function() {
       $(this).unbind('click');
       alert('Clicked and unbound!');
});
