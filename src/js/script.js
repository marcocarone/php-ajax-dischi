const $ = require("jquery");
const Handlebars = require("handlebars");

$(document).ready(function() {

  ajaxAlbum();
});


function ajaxAlbum() {
  $.ajax({

    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'get',
    success: function(data) {

      var album = data;

      var source = $('#album').html();;
      var template = Handlebars.compile(source);

      for (var i = 0; i < album.length; i++) {

        var context = {
          copertina: album[i].poster,
          titolo: album[i].title,
          artista: album[i].author,
          anno: album[i].year
        }

        var html = template(context);
        $('main .wrapper').append(html);

      }
    },
    error: function() {
      alert('Errore ajax');
    }
  });
}
