
<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul>
<?php
if(isset($_POST['deco']))
{
  $user->disconnect();
}
?>

    <?php if(isset($_SESSION['login']))
    {
    ?>

<div class="container row">

      <a href=""><div class="logoprofilhover"></div></a>
        <ul class="row justify-content-center">
            <a class="navbar navbar-expand-lg navbar-light bg-light" href="index.php">Accueil</a>
            <a class="navbar navbar-expand-lg navbar-light bg-light" href="calendrier.php">Calendrier</a>
            <a class="navbar navbar-expand-lg navbar-light bg-light" class="menu" href="profil.php">Mon profil</a>


        </ul>

</div>

      <a href="index.php"><div class="logohover"></div></a>



      <form class="disconnect" method="post" action="" >
        <input name="deco" type="submit" value="Déconnexion">
      </form>


<?php
}
else
{
?>
<div class="container">

</div>
<ul>

    <a href="index.php"><div class="logohover"></div></a>
    <a class="navbar navbar-expand-lg navbar-light bg-light" href="inscription.php">Inscription</a>
    <a class="navbar navbar-expand-lg navbar-light bg-light"  href="connexion.php">Connexion</a>
    <a  class="navbar navbar-expand-lg navbar-light bg-light" href="contact.php">Contactez-nous</a>
  </ul>

<?php
}
?>
</ul>

</div>
</nav>
</header>
