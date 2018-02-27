<?php 
	$serveur="localhost";
	$login="root";
	$pass="root";
	$db="application";


$pseudo=$_POST['pseudo'];
$email=$_POST['email'];
$pass=$_POST['pass'];

	try{
			$conn=new PDO("mysql:host=$serveur;dbname=$db",$login,$pass);
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			$sql=("INSERT INTO user(user_pseudo,user_mail,user_pass) values(:pseudo,:email,:pass)");
			$requete=$conn ->prepare($sql);
			$requete -> bindParam(':pseudo',$pseudo);
			$requete -> bindParam(':email',$email);
			$requete -> bindParam(':pass',$pass);

			$requete -> execute();

			echo "<a href='index.php'>WAWAWA</a>";

	}
	catch(PDOException $erreur){
			echo "ECHEC : " .$erreur -> getMessage();
	}

 ?>