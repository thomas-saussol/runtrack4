<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Up to you Burger</title>

    <style type="text/css">
    body{
      background-color: rgb(235, 224, 102);
    }

      </style>

  </head>

  <body body-background= yellow>
    <nav>
        <div class="nav-wrapper grey darken-3">
          <a href="index.php" class="brand-logo"> <img src="img/uptoyou.jpg" " WIDTH=174 HEIGHT=60"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Qui sommes-nous?</a></li>
            <li><a href="index.php">Nos menus!</a></li>
            <li><a href="index.php">Réservation</a></li>
          </ul>
        </div>
      </nav>

      <div class="row">
         <div class="center-align"><h4>Bienvenue!</h4></div>
         <br><br>
         <div class="col s12 m4 l2"><img class="z-depth-4" src="img/1.jpg" " WIDTH=200 HEIGHT=200"></div>
         <div class="col s12 m4 l8">

           <div class="carousel">
                <h3 class="carousel-item grey center" href="#one!">Ici nous faisons tout maison!</h3>
                <a class="carousel-item" href="#two!"><img class="z-depth-4" src="img/2.jpg" " WIDTH=100 HEIGHT=250"></a>
                <h3 class="carousel-item orange center" href="#three!">Profitez et régalez-vous!</h3>
                <a class="carousel-item" href="#four!"><img class="z-depth-4" src="img/4.jpg" " WIDTH=100 HEIGHT=250"></a>
          </div>

          <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, options);
          });


          </script>

</div>
         <div class="col s12 m4 l2"><img class="z-depth-4" src="img/1.jpg" " WIDTH=200 HEIGHT=200"></div>
       </div>
       <div class="row">
         <!-- premier burger -->
         <div class="col s12 m6 l3">

           <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Burger Savoyard</span>
          <img class="z-depth-4" src="img/1.jpg" " WIDTH=100 HEIGHT=100">
        </div>
        <div class="card-action">
        <h5>Avec Menu gourmand 15€</h5>
        </div>
      </div>
    </div>
  </div>
</div>
         <!-- deuxième burger -->
         <div class="col s12 m6 l3">         <div class="row">
           <div class="col s12 m6">
             <div class="card blue-grey darken-1">
               <div class="card-content white-text">
                 <span class="card-title">Burger Gourmet</span>
                 <img class="z-depth-4" src="img/1.jpg" " WIDTH=100 HEIGHT=100">
               </div>
               <div class="card-action">
               <h5>Avec Menu gourmand 16€</h5>
               </div>
             </div>
           </div>
         </div>
       </div>


         <!-- troisième burger -->
         <div class="col s12 m6 l3">
           <div class="row">
           <div class="col s12 m6">
             <div class="card blue-grey darken-1">
               <div class="card-content white-text">
                 <span class="card-title">Burger oriental</span>
                 <img class="z-depth-4" src="img/1.jpg" " WIDTH=100 HEIGHT=100">
               </div>
               <div class="card-action">
               <h5>Avec Menu classique 10€</h5>
               </div>
             </div>
           </div>
         </div>
       </div>

         <!-- quatrième burger -->
         <div class="col s12 m6 l3">
            <div class="row">
           <div class="col s12 m6">
             <div class="card blue-grey darken-1">
               <div class="card-content white-text">
                 <span class="card-title">Burger Italien</span>
                 <img class="z-depth-4" src="img/1.jpg" " WIDTH=100 HEIGHT=100">
               </div>
               <div class="card-action">
               <h5>Avec Menu Boisson 13€</h5>
               </div>
             </div>
           </div>
         </div>
       </div>
       </div>

  </body>
</html>
