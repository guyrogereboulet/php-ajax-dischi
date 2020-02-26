  const $ = require("jquery");
  const Handlebars = require("handlebars");

  $(document).ready(function(){
    $.ajax(
    {
      url:'http://localhost:88/php-ajax-dischi/server-ajax.php',
      method:'GET',
      success: function (data){
        console.log(data);
        printResult(data);
      },
      error: function (request, state, errors) {
        alert('errore');
      }
    });








  });


  //FUNCTIONS
  function printResult (result) {
  reset();
  var source = $("#cd-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < result.length; i++) {
    if (result.length > 0) {
      var cd = result[i];
      console.log(result[i]);
      var context = {
        title: cd.title,
        author: cd.author,
        year: cd.year,
        poster: cd.poster
       };
      var html = template(context);
      $('.container-cd').append(html);
    }
    else {
      printResultNo();
    }
  }

  function reset () {
  $('.container-cd').html('');
  }
}
