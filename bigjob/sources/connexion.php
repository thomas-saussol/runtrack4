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
		<title>Connexion</title>
		<link href="bigjob.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	</head>
<body>

		<?php include("header.php");?>
<?php if ($_GET['new']=1) {
echo "Votre compte a bien été créé!<br> <br>" ;
} ?>

<h1 class="log_titre">Connectez-vous !</h1>

<div class="container">

			<form action="" method="post">
			<?php
				if(isset($_POST['connect']))
				{
					$user = new userpdo;
					$userconnect= $user->connect($_POST['login'], $_POST['password']);
					if($userconnect=="ok" )
					{
						header('location: index.php');
					}
					else
					{
						echo $userconnect;
					}
				}
			?>
				<input type="text" name="login" required placeholder="Login">
				<input type="password" name="password" required placeholder="Password">
				<input type="submit" name="connect" required value="Connexion">
			</form>
</div>

		<?php include("footer.php");?>
	</body>
</html>

<!-- --------------------------------------------- -->
