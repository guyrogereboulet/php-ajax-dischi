  const $ = require("jquery");
  const Handlebars = require("handlebars");

  $(document).ready(function(){
    $.ajax(
    {
      url:'http://localhost:88/php-ajax-dischi/server-ajax.php',
      method:'GET',
      success: function (data){
        printResult(data);
      },
      error: function (request, state, errors) {
        alert('errore');
      }
    });
    $('.selection').change(function(){
      var author = $(this).val();
      console.log(author);
      $.ajax(
        {
          url:'http://localhost:88/php-ajax-dischi/server-ajax.php',
          method:'GET',
          data: {
            author: author
          },
          success: function (data){
            printResult(data);
          },
          error: function (request, state, errors) {
            alert('errore');
          }
        });
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
  function printResultNo() {
  var source = $("#cd-template").html();
  var template = Handlebars.compile(source);
  var html = template(context);
  $('.container-cd').append(html);
}


  function reset () {
  $('.container-cd').html('');
  }
}
