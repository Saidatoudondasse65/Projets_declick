<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
<?php
include "connexion.php";
if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    $requette=mysqli_query($connexion,"SELECT * FROM developpeurs WHERE id='$id'");
    $resultat=mysqli_fetch_array($requette);
    if($resultat){
        echo"";
    }else{
        echo"Aucun resultat";
    }
}

?>
    <form action="modifier.php" method="POST">
        <fieldset>
        <legend>Details</legend>

<input type="hidden" name="id" value= <?php echo $resultat["id"]; ?>>
<label>Nom:<input type="text" name="nom" value=<?php echo $resultat["Nom"]; ?>></label> <br>
<label>Prenom:<input type="text" name="prenom" value= <?php echo $resultat["Prenom"];?> ></label> <br>
<label>Tel:<input type="number" name="tel" value=<?php echo $resultat["Tel"] ;?>></label> <br>
<label>Email:<input type="email" name="mail"  value=<?php echo $resultat["Email"] ;?>></label> <br>
<label>Genre:</label>
<?php
if($resultat["Genre"]=='Homme')
{
?>
<input type="radio" name="sexe" value="homme" checked="true">Homme
<input type="radio" name="sexe" value="femme">Femme <br>
<?php
} else {   
?>
<input type="radio" name="sexe" value="homme" >Homme
<input type="radio" name="sexe" value="femme" checked="true">Femme <br>
<?php
}
?>
<input type="submit" value="modifier">
</fieldset>
    </form>
    
</body>
</html>