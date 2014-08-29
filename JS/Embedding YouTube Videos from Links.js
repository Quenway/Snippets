/*
Useful script to create embedded Youtube videos from links with custom parameters.
It works with mostly every Youtube link format since it uses a pretty forgiving regex,
but it may not work for every single case. This script also fixes the tedious "super z-index"
issue that you may have experienced when embedding Youtube videos.
*/

function embedYoutube(link, ops) {
 
  var o = $.extend({
    width: 480,
    height: 320,
    params: ''
  }, ops);
 
  var id = /\?v\=(\w+)/.exec(link)[1];
 
  return '<iframe style="display: block;"'+
    ' class="youtube-video" type="text/html"'+
    ' width="' + o.width + '" height="' + o.height +
    ' "src="http://www.youtube.com/embed/' + id + '?' + o.params +
    '&amp;wmode=transparent" frameborder="0" />';
}

/*
Usage:
Check out the Youtube API parameters (https://developers.google.com/youtube/player_parameters) for more info on params.
*/

embedYoutube(
  'https://www.youtube.com/watch?v=JaAWdljhD5o', 
  { params: 'theme=light&fs=0' }
);
