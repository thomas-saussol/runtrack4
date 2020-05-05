<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>job04</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>
<header>
  <nav>
    <ul >
      <li><a href="index.php">Accueil</a></li>
      <li><a href="index.php">Inscription</a></li>
      <li><a href="index.php">Connexion</a></li>
      <li><a href="index.php">Rechercher</a></li>
    </ul>
  </nav>
</header>

<form class="" action="index.html" method="post">

  <h3>Civilité</h3>
  <form action="#">
    <p>
        <label>
          <input type="checkbox" class="filled-in" checked="checked" />
          <span>Mr.</span>
        </label>
      </p>
      <p>
          <label>
            <input type="checkbox" class="filled-in" checked="checked" />
            <span>Mme.</span>
          </label>
        </p>

        <p>
              <label>
                <input type="checkbox" class="filled-in" checked="checked" />
                <span>Mlle.</span>
              </label>
            </p>
</form>

<h3>Remplissez les cases</h3>
<form>
  <input type="text" name="Nom" value="" placeholder="Nom">

  <input type="text" name="Prénom" value="" placeholder="Prénom">
  <input type="text" name="Adresse" value="" placeholder="Adresse">
  <input type="email" name="Email" value="" placeholder="Email">
  <input type="password" name="Password" value="" placeholder="Password">
  <h3>Les Passions:</h3>


  <form action="#">
    <p>
      <label>
        <input type="checkbox" />
        <span>Informatique</span>
      </label>
    </p>


    <form action="#">
        <p>
          <label>
            <input type="checkbox" />
            <span>Voyage</span>
          </label>
        </p>



        <form action="#">
            <p>
              <label>
                <input type="checkbox" />
                <span>Sport</span>
              </label>
            </p>



            <form action="#">
                <p>
                  <label>
                    <input type="checkbox" />
                    <span>Lecture</span>
                  </label>
                </p>
                <button class="btn waves-effect waves-light Green" type="submit" name="action">Submit
                   <i class="material-icons right blue">send</i>
                 </button>

</form>


<footer class="page-footer">
     <div class="container">
       <div class="row">
         <div class="col l6 s12">
           <h5 class="white-text">Breef</h5>
           <p class="grey-text text-lighten-4">Amusez-vous bien!</p>
         </div>
         <div class="col l4 offset-l2 s12">
           <h5 class="white-text">Liens</h5>
           <ul>
             <li><a class="col s12 m6 l3 white" href="index.php">Link 1</a></li>
             <li><a class="col s12 m6 l3 white" href="index.php">Link 2</a></li>
             <li><a class="col s12 m6 l3 white" href="index.php">Link 3</a></li>
             <li><a class="col s12 m6 l3 white" href="index.php">Link 4</a></li>
           </ul>
         </div>
       </div>
     </div>
     <div class="footer-copyright">
       <div class="container">
       © 2020 Thomas's Company
       <a class="grey-text text-lighten-4 right" href="#!">Encore plus d'infos!</a>
       </div>
     </div>
   </footer>

  </body>
</html>
