
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


      <a href=""><div class="logoprofilhover"></div></a>
        <ul>

            <a class="navbar navbar-expand-lg navbar-light bg-light" class="menu" href="profil.php">Mon profil</a>
            <a class="navbar navbar-expand-lg navbar-light bg-light" href="calendrier.php">Calendrier</a>
            <a class="navbar navbar-expand-lg navbar-light bg-light" href="administration.php">Administration</a>

        </ul>



      <a href="index.php"><div class="logohover"></div></a>



      <form class="disconnect" method="post" action="" >
        <input name="deco" type="submit" value="Déconnexion">
      </form>


<?php
}
else
{
?>

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

</nav>
</header>
