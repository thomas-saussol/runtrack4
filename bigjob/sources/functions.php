<?php

session_start();


// PARTIE UTILISATEURS

class userpdo
{

	private $id ='';
	public 	$login ='';
	public 	$nom='';
	public 	$prenom='';
	public 	$email='';
	public 	$pass1='';
	public 	$pass2='';





function connectdb()
	{

		$base = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');
		return $base;
	}

	public function register($login, $nom, $prenom, $email, $pass1, $pass2)
	{
		$user = $this->connectdb()->query("SELECT *FROM utilisateurs WHERE login='$login'");
		$etat = $user->rowCount();

			if($pass1 != $pass2 || strlen($pass1) < 5)
			{
				if($pass1 != $pass2)
				{
					$msg="Mots de passes rentrés différents";
				}
				if(strlen($pass1) < 5)
				{
					$msg="Mot de passe trop court";
				}
			}
			else
			{
				if($etat== 0)
				{
					$hash = password_hash($pass1, PASSWORD_BCRYPT, ['cost' => 12]);
					$requser =  $this->connectdb()->query("INSERT INTO utilisateurs VALUES(NULL, '$login', '$nom', '$prenom','$email','$hash')");
					$msg="ok";
				}
				else
				{
					$msg="login déjà existant";
				}
			}

			return $msg;
	}



public function connect($login, $pass1)
{
	$user =  $this->connectdb()->query("SELECT *FROM utilisateurs WHERE login='$login'");
	$donnees = $user->fetch();

		if(password_verify($pass1,$donnees['password']))
		{
			$this->id=$donnees['id'];
			$this->login=$login;
			$this->nom=$donnees['nom'];
			$this->prenom=$donnees['prenom'];
			$this->email=$donnees['email'];
			$this->pass1=$donnees['pass1'];


			$_SESSION['login']=$login;
			$_SESSION['pass1']=$pass1;
			$msg="ok";
		}
		else
		{
			$msg="Login ou mot de passe incorrect";
		}

		return $msg;
}

public function disconnect()
{
	session_destroy();
	header('location: index.php');
}

public function delete()
{
	if(isset($_SESSION['login']))
	{
		include('connect.php');
		$login=$_SESSION['login'];
		$del =  $this->connectdb()->query("DELETE FROM utilisateurs WHERE login='$login'");
		session_destroy();
	}

}

public function update($login, $nom, $prenom, $email,$pass1)
{


	$log=$_SESSION['login'];
	if($_SESSION['login'] != $login)
	{
		$user = $this->connectdb()->query("SELECT *FROM utilisateurs WHERE login='$login'");
		$etat = $user->rowCount();

		if($etat > 0)
		{
			$msg="erreur";
		}
	}
	else
	{
		if(strlen($pass1) >= 5)
		{
			$hash = sha1($pass1);
			$update =  $this->connectdb()->query("UPDATE utilisateurs SET login='$login', nom='$nom', prenom='$prenom', email='$email', pass1='$hash'  WHERE 		login='$log'");

		$this->login=$login;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->pass1=$pass1;


		unset($_SESSION['login']);
		unset($_SESSION['pass1']);
		header('location: connexion.php');
		}
		else
		{
			$msg="erreur2";
		}

	}
		return $msg;
}

public function getAllInfos()
{
	if(isset($_SESSION['login']))
	{
		$tab=[];
		$login=$_SESSION['login'];
		$infos =  $this->connectdb()->query("SELECT *FROM utilisateurs WHERE login='$login'");

		while($parameter = $infos->fetch())
		{
			array_push($tab, $parameter);
		}

		return $tab;
    }
    else
    {

    	return "Aucun utilisateur n'est connecté";
    }
}

public function refresh()
{


	$login=$_SESSION['login'];
	$queryuser =  $this->connectdb() ->query("SELECT *from utilisateurs WHERE login='$login'");
	$donnees = $queryuser->fetch();

	$this->id=$donnees['id'];
	$this->login=$donnees['login'];
	$this->nom=$donnees['nom'];
	$this->prenom=$donnees['prenom'];
	$this->email=$donnees['email'];
	$this->pass1=$donnees['pass1'];
	$this->date_naissance=$donnees['date_naissance'];

}

}
