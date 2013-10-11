$(function () {
    var jokes = ["Joke 1", "Joke 2", "Joke 3", "Joke 4", "Joke 5", "Joke 6", "Joke 7", "Joke 8", "Joke 9", "Joke 10"];

    $( "button" ).click(function() {
      var jokeId = Math.floor((Math.random()*10));
      var joke = $('#joke');
      joke.text(jokes[jokeId]);
    });

});