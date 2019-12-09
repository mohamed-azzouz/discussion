<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Discussion</title>
	<link rel="stylesheet" href="discussion.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bungee&display=swap" rel="stylesheet">
    
</head>
<body class="bodydiscussion">
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

        <?php
            if ($_SESSION['login'] == false) 
            {
                header('Location:connexion.php');
            }
            $connexion = mysqli_connect("localhost", "root","", "discussion");        
            if(isset($_POST["comment"]))
            {
                $comment=$_POST["comment"];
            }      
            else 
            {
                $comment="";
            }   

            if (isset($_POST['confirm']))
            { 
                date_default_timezone_set("Europe/Paris");
                             
                $requete = "INSERT INTO messages (message, id_utilisateur, date) VALUES (\"$comment\",'".$_SESSION['id']."','".date("Y-m-d H:i:s")."')";

                $query = mysqli_query($connexion, $requete);

            }

        ?>  
                
         
        
        <h1 id="titrediscussion"><img src="photo/discussion.png"></h1>
    	   <section class="Allmessage">
    		
        		<div class="discussion">
        			<?php
    	                $connexion = mysqli_connect("localhost", "root", "", "discussion");
    	                $log = "SELECT id,login FROM utilisateurs";
    	                $com = "SELECT * FROM messages ORDER BY date DESC";
    	                $query = mysqli_query($connexion, $com);
    	                $resultat = mysqli_fetch_all($query);
    	                $query2 = mysqli_query($connexion, $log);
    	                $resultat2 = mysqli_fetch_all($query2);


    	                $i = 0; 
    	                while($i < count($resultat))
    	                {
    	                    $i2 = 0;
    	                    while($i2 < count($resultat2))
    	                    {
    	                        if($resultat[$i][2] == $resultat2[$i2][0])
    	                        {
                                    
    	                            $date = $resultat[$i][3];
    	                            $date2 = date("d-m-Y à H:i:s",strtotime($date)); ?>


    	                            <section class='post'>
    	                               <div id="post2">Posté par <?php echo $resultat2[$i2][1]." le ".$date2 ?></div>
    	                               <div id="post2"><?php echo $resultat[$i][1] ?></div>
    	                               <br><br>
    	                            </section>
                                
    	                        <?php 
                                
    	                        }

    	                        $i2++;
    	                    }
    	                    $i++;

    	                } 

                                          
                	?>
        			
        		</div>
        	</section>

        <section class="commentaire1">
            <?php
                if (isset($_SESSION['login'])): ?> 
                    
                        <div class='commentaire2'>
                            <form  class='formco' action='discussion.php' method='post'>

                                    <textarea type='text'  placeholder='Votre message' rows='25' cols='60' name='comment' id='comment' resize:none required></textarea><br>

                                    <input type='submit' value='Envoyer' name='confirm' />
                            </form>
                        </div>

                    <?php endif; ?>
                
            
        </section>

    	
    	
    </main>

</body>
</html>