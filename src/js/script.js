const $ = require("jquery");
const Handlebars = require("handlebars");


$(document).ready(function() {

  ajaxAlbum();


  // RICERCA ALBUM
  $(".search-bar").keyup(function() {
    $('main .wrapper').empty();
    var inputRicerca = $(this).val().toLowerCase();
    console.log(inputRicerca);
    ricerca(inputRicerca);
  });
});

//FUNZIONI SCRIPT
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


function ricerca(inputRicerca) {
  $.ajax({

    url: 'http://localhost:8888/php-ajax-dischi/server.php',
    method: 'get',
    success: function(data) {

      var album = data;

      var source = $('#album').html();;
      var template = Handlebars.compile(source);

      if (inputRicerca == 0) {
        $('main .wrapper').empty();
        ajaxAlbum();
      } else {
        for (var i = 0; i < album.length; i++) {
          var nomeArtista = album[i].author.toLowerCase();


          if (nomeArtista.includes(inputRicerca)) {
            var context = {
              copertina: album[i].poster,
              titolo: album[i].title,
              artista: album[i].author,
              anno: album[i].year
            }

            var html = template(context);
            $('main .wrapper').append(html);
          }
        }


      }
    },
    error: function() {
      alert('Errore ajax');
    }
  });
}
