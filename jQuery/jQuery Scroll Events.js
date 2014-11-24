// Increasingly, developers are spicing up web pages by creating interactive transitions
// as a user scrolls through a page. You might notice a link to a related article pops up
// when you finish reading an editorial on the New York Times, or background images shifting
// as you progress through a page’s sections. Here’s an example to set up an event listener
// using jQuery that updates sidebar content with a date:

$(window).on(“scroll resize”, function(){
  var pos=$(‘#date’).offset();
  $(‘.post’).each(function(){
  if(pos.top >= $(this).offset().top && pos.top <= $(this).next().offset().top) {
    $('#date').html($(this).html());
    return; //break the loop
  }
  });
});
$(document).ready(function(){
$(window).trigger('scroll'); // init the value
});
This is just one piece of the puzzle. You can check out a full-working demo on jsfiddle - http://jsfiddle.net/antonoff/4Vk7r/8/.
