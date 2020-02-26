<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ajax-call</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
        <select class="selection" name="genre">
                  <option value="All">All</option>
                  <option value="Bon Jovi">Bon Jovi</option>
                  <option value="NOFX">NOFX</option>
                  <option value="Khruangbin & Leon Bridges">Khruangbin & Leon Bridges</option>
                  <option value="Pet Shop Boys">Pet Shop Boys</option>
                  <option value="Aretha Franklin">Aretha Franklin</option>
                  <option value="Blink-182">Blink-182</option>
                  <option value="Capo Plaza">Capo Plaza</option>
                  <option value="Blur">Blur</option>
                  <option value="Diodato">Diodato</option>
                  <option value="Tame Impala">Tame Impala</option>
        </select>
      </div>
    </header>

    <main>
      <div class="container">
        <ul class="container-cd">


        </ul>
      </div>
    </main>

    <!-- Script Handlebars -->
    <script id="cd-template" type="text/x-handlebars-template">
       <li>
         <img src="{{poster}}" alt="">
         <h3>{{title}}</h3>
         <p>{{author}}</p>
         <small>{{year}}</small>
       </li>
    </script>
    <!-- Script JS -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
