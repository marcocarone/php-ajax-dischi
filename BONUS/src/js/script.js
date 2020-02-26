const $ = require("jquery");
const Handlebars = require("handlebars");


$(document).ready(function() {
  ajaxAlbum();

  // RICERCA ALBUM
  $('.search-bar').keypress(
    function() {
      if (event.which == 13 || event.keyCode == 13) {
        $('main .wrapper').empty();
        var inputRicerca = $(this).val().toLowerCase();
        ricerca(inputRicerca);
        $('.search-bar').val("");
      }
    });

    $('.all_album').click(
      function() {
          $('main .wrapper').empty();
          ajaxAlbum();

      });

});

//FUNZIONI SCRIPT
function ajaxAlbum() {
  $.ajax({

    url: 'server.php',
    method: 'get',
    success: function(data) {

      stampa(data)
    },
    error: function() {
      alert('Errore ajax');
    }
  });
}

// funzione cerca
function ricerca(inputRicerca) {
  $.ajax({

    url: 'server.php',
    data: {
      author: inputRicerca,
    },
    method: 'get',
    success: function(data) {
    console.log(data + "..dataaaa")
      if (data.length == 0) {
        Toastify({
          text: "Non ci sono album con questo autore",
          duration: 3000,
          gravity: "bottom",
          position: 'right',
          backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
        }).showToast();
      } else {
        stampa(data)
      }

    },
    error: function() {
      alert('Errore ajax');
    }
  });
}

function stampa(data) {
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
}
