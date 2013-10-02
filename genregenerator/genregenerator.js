var Genregenerator = {};

if(Drupal.jsEnabled) {
  $(document).ready(
    function() {
      $("#genregenerator-genre p").after('<a id="regenerate-genre">Refresh</a>').next().click(Genregenerator.randQuote);
      genre =  $("#genregenerator-genre p").text();
      $("#genre-tweet").html('<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.thund3rbox.com/genre" data-text="My band\'s genre is ' + genre + '. What\'s yours? " data-count="vertical" data-via="thund3rbox">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>');
    }
  );

  /**
   * A function to fetch genre from the server, and display in the
   * designated area
   */

  Genregenerator.randQuote = function() {
    $.get(Drupal.settings.genregenerator.json_url, function(data) {
      myGenre = Drupal.parseJson(data);
      if(!myGenre.status || myGenre.status == 0) {
        $("#genregenerator-genre p").text(myGenre.genre);
        $("#genre-tweet").html('<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.thund3rbox.com/genre" data-text="My band\'s genre is ' + myGenre.genre + '. What\'s yours? " data-count="vertical" data-via="thund3rbox">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>');
      }
    });
  }

}

