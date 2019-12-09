<?php 	session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="discussion.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

</head>
<body class="bodyindex">
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
        
        <div class="star-wars-intro">

 
            <p class="intro-text"><img src="photo/bienvenue.png"></p>

        
            <h2 class="main-logo"><img src="photo/plateforme.jpg"></h2>

  
            <div class="main-content">

                <div class="title-content">
                    <p class="content-header">EPISODES IV<br/>Discussion</p>
                    <br>
                    <p class="content-body">
                        After years of galactic silence, civilization is on the brink of a new Star Wars release. Now, with the Force preparing to awaken, the people of Earth seek solace in films of old. With nowhere to turn, they gather in great numbers and watch the original trilogy without rest. Three films. 6 hours. 24 minutes. Popcorn. Slushies. Total elation.
                    </p>
                </div>
            </div>
        </div>
    </main>

       


</body>
</html>