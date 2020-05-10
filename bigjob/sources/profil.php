<!-- ------- PARTIE PHP - FONCTION REGISTER ------- -->


<?php include("functions.php");



if(!isset($_SESSION['login']))
{
	header('Location: index.php');
}



$user = new userpdo;
$monprofil=$user->getAllInfos();


?>

<!-- ---------------------------------------------- -->
<!-- ---------- FORMULAIRE HTML-------------------- -->

<html>
	<head>
		<link href="projet_pro.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</head>

	<body id="profil_toto">
		<?php include("header.php");?>

<h1 class="log_titre">Vos informations</h1>
<div id="form_log2">
		<form action="" method="post">
		<?php
			if(isset($_POST['update']))
				{

					$profil_update=$user->update($_POST['login'], $_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['pass']);
					if($profil_update == "erreur")
					{
						?><p>Login déjà existant</p><?php
					}
					else if($profil_update == "erreur2")
					{
						?><p>Mot de passe trop court (5 caractères minimums)</p><?php
					}
				}
		?>
			<input type="text" name="login" required placeholder="Login" value="<?php echo $monprofil[0][1]; ?>">
			<input type="text" name="lastname" required placeholder="Nom" value="<?php echo $monprofil[0][2]; ?>">
			<input type="text" name="firstname" required placeholder="Prénom" value="<?php echo $monprofil[0][3]; ?>">
			<input type="email" name="email" required placeholder="Email" value="<?php echo $monprofil[0][4]; ?>">
			<input type="password" name="pass" required placeholder="Mot de passe" value="">
			<input type="submit" name="update" required value="Modifier">
		</form>
</div>
	</body>
</html>

<!-- --------------------------------------------- -->
