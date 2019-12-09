<?php 	session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<link rel="stylesheet" href="discussion.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

</head>
<body class="bodyinscription">
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
    <main>

    	<div class="formulaireinscription">
			<h1 id="titreinscription">Inscription</h1>
			<form action="inscription.php" method="post">
				<div class="info">
					
					<label for="login">Login :<br> </label>
					<input type="text" name="login" id="login" required>

					<br>
					<br>

					<label for="password">Mot de passe :<br></label>
					<input type="password" name="password" id="password" required>

					<br>
					<br>

					<label for="confirmpassword">Confirmer Mot de passe :<br></label>
					<input type="password" name="confirmpassword" id="confirmpassword" required>

					<br>
					<br>

					<input type="submit" value="Inscription" name="confirm" /><br>
				</div>

				
			</form>
		
	</div>

	<?php

		if(isset($_POST["login"]))
		{
			$login=$_POST["login"];
		}      
		else 
		{
			$login="";
		}     



		if(isset($_POST["password"]))
		{
			$password=$_POST["password"];
			$mdphash = password_hash( $password, PASSWORD_BCRYPT, array('cost' => 12)) ;
		}      
		else
		{
			$password="";
		}

	

		if(isset($_POST['confirm']))
		{
		
			$connexion = mysqli_connect("localhost", "root","", "discussion");
			                    
			$requete3 = "SELECT login FROM utilisateurs WHERE login = '$login'";         
			$query3 = mysqli_query($connexion, $requete3);         
			$resultat3 = mysqli_fetch_all($query3);             
			if (!empty($resultat3))             
			{                 
				echo "<div id='logmdp'>Ce Login est déjà pris"; 
			}
			elseif($_POST["password"] != $_POST["confirmpassword"])            
			{                
				echo "<div id='logmdp'>Les mots de passe ne correspondent pas </div>";
			}                     
			else            
		 	{                
				$requete = "INSERT INTO utilisateurs (login, password) VALUES ('$login', '$mdp')";
				$query = mysqli_query($connexion, $requete);             
				header('Location:connexion.php');            
			}
		}


	

	?>
    

    </main>
        
	
	

</body>
</html>