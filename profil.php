<?php

session_start();
$connexion= mysqli_connect("localhost","root","","discussion");

$query="SELECT * from utilisateurs WHERE login = '".$_SESSION['login']."' ";
$result= mysqli_query($connexion, $query);
$row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<link rel="stylesheet" href="discussion.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

</head>
<body class="bodyprofil">
		<header>
            
        <nav id="menuheader1">
            <div id="menuheader2">
                <?php
                    if (isset($_SESSION['login'])):?>  
                        <span class='header'><a href='index.php'><img src="photo/imgindex.jpg"><br>Index</a></span> 
                        <span class='header'><a href='discussion.php'><img src="photo/imgdiscussion.jpg"><br>Discussion</a></span>
                        <span class='header'><a href='profil.php'><img src="photo/imgprofil.jpg"><br>Profil</a></span>
                        <span class='header'><form action ='index.php' method='post'><input type='submit' value='Deconnexion' name='deconnexion'></form></span>
                   
                    <?php if(isset($_POST["deconnexion"])):
                            session_unset();
                            session_destroy();
                            header('location:index.php');
                            endif; ?>
                    <?php else: ?>
                        <span class='header'><a href='index.php'><img src="photo/imgindex.jpg"><br>Index</a></span>
                        <span class='header'><a href='connexion.php'><img src="photo/imgconnexion.jpg"><br>Connexion</a></span>
                        <span class='header'><a href='inscription.php'><img src="photo/imginscription.jpg"><br>Inscription</a></span>
                        <span class='header'><a href='discussion.php'><img src="photo/imgdiscussion.jpg"><br>Discussion</a></span>
                    <?php endif; ?>
                </div>
            </nav>
    </header>

		<div class="formulaireprofil">
			<h1 id="titreprofil">Modifier votre profil </h1>
			<form action="profil.php" method="post">
					

					<div class="infoprofil">
						
						<label for="login">Login :<br> </label>
						<input type="text" name="login" id="login" required value="<?php echo $row['login']?>">

						<br>
						<br>

						<label for="password">Mot de passe :<br></label>
						<input type="password" name="password" id="password" required value="<?php echo $row['password']?>">

						<br>
						<br>

						<label for="confirmpassword">Confirmer Mot de passe :<br></label>
						<input type="password" name="confirmpassword" id="confirmpassword" required>

						<br>
						<br>

						<input type="submit" value="Modifier" name="modifier" /><br>
					</div>

					
			</form>
			
		</div>
	

</body>
</html>

<?php 

	if(isset($_POST['modifier']))
	{
		$connexion = mysqli_connect("localhost", "root","", "discussion");
			$login = $_POST['login'] ;                   
			$requete3 = "SELECT login FROM utilisateurs WHERE login = '$login'";         
			$query3 = mysqli_query($connexion, $requete3);         
			$resultat3 = mysqli_fetch_all($query3);             
			if (!empty($resultat3))             
			{                 
				echo "<div id='log'>Ce Login est déjà prit</div>";             
			}             
			else
			{
				if($_POST['login'] != $row['login'])

				{
				   $connexion = mysqli_connect("localhost","root","","discussion");
				   $query = "UPDATE utilisateurs SET login = '".$_POST['login']."' WHERE utilisateurs.login='".$row['login']."'";
				   $result = mysqli_query($connexion, $query);

				}
				if($_POST['password'] != $row['password'])
				{
				   $connexion = mysqli_connect("localhost","root","","discussion");
				   $query = "UPDATE utilisateurs SET password = '".$_POST['password']."' WHERE utilisateurs.password='".$row['password']."'";
				   $result = mysqli_query($connexion, $query);

				}
			}
	             
	   


	}


?>