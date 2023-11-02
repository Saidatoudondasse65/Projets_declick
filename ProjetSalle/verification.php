<?php
include "connexion.php";

if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['passe']))
{
  $nom = $_POST['nom']; 
  $email = $_POST['email'];
  $passe = $_POST['passe'];
  
  $requette = mysqli_query($conn,"INSERT INTO administrateur(nom, email, passe)
              VALUES ('$nom', '$email', '$passe')");
  
  if($requette)
  { echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
         </div>";
  } 
  else {
    echo "Inscription non réussie";
  }
}else
{
  echo"champs manquants";
}
?>
