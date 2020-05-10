<!-- ------- PARTIE PHP - FONCTION REGISTER ------- -->
<?php include("functions.php");


if(isset($_SESSION['login']))
{
	header('location: index.php');
}

?>

<!-- ---------------------------------------------- -->
<!-- ---------- FORMULAIRE HTML-------------------- -->

<html>
	<head>
		<link href="bigjob.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</head>
	<body>



		<?php include("header.php");?>
<div class="container">
<div class="row">

<h1>Inscrivez-vous !</h1>
<div >
		<form action="inscription.php" method="post">
			<input type="text" name="login" required placeholder="Login">
			<input type="text" name="nom" required placeholder="Nom">
			<input type="text" name="prenom" required placeholder="Prénom">
			<input type="email" name="email" required placeholder="Email">
			<input type="password" name="pass1" required placeholder="Mot de passe">
			<input type="password" name="pass2" required placeholder="Confirmer votre mot de passe">
			<input type="submit" name="signin" required value="S'inscrire">

			<?php
			if(isset($_POST['signin']))
			{
				$user = new userpdo;
				$user_sign=$user->register($_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['pass1'], $_POST['pass2']);
				if($user_sign=="ok")
				{
					header('location: connexion.php?new=1');

				}
				else
				{
					echo $user_sign;
				}
			}
			?>
		</form>
</div>
</div>
</div>
 <div class="image_inscription">
<img src="inscriptions.jpg" alt="">
 </div>
	</body>
</html>

<!-- --------------------------------------------- -->
