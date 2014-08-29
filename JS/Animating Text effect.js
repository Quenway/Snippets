//Simple yet powerful script to animate text properties. It yields some intersting results when combined with CSS3 transitions.
//This snippet is provided as a jQuery plugin for ease of use:

$.fn.animateText = function(delay, klass) {
  
  var text = this.text();
  var letters = text.split('');
  
  return this.each(function(){
    var $this = $(this);
    $this.html(text.replace(/./g, '<span class="letter">$&</span>'));
    $this.find('span.letter').each(function(i, el){
      setTimeout(function(){ $(el).addClass(klass); }, delay * i);
    });
  });
  
};
