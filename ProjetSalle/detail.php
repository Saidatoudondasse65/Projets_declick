<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
     body{     
        background-color:#b8f0e1; 
        }
      form{
      width:600px;
        margin:auto;
        margin-top:150px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        box-shadow:2px 3px 4px black;
      }
      input{
        width:100%;
        height:25px;
        border-radius:3px;
      }
  </style>
</head>
<body>
<?php
include "connexion.php";

if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    $requette=mysqli_query($conn,"SELECT * FROM sales WHERE idsale='$id'");
    $resultat=mysqli_fetch_array($requette);
    if($resultat){
        echo"";
    }
    else{
        echo"Aucun resultat";
 }
}

?>
<form action="modifier.php" method="POST">  
 <h1 class="box-title">Details</h1>
<input type="hidden" name="id" value=<?php echo $resultat["idsale"]; ?>>
Nom:<input type="text" name="nom" value=<?php echo $resultat["nom"]; ?>> <br>
Capacite:<input type="text" name="capacite" value= <?php echo $resultat["capacite"];?>> <br>
Equipement:<input type="text" name="equipement" value=<?php echo $resultat["equipement"] ;?>> <br>
Date:<input type="date" name="date"  value=<?php echo $resultat["date"] ;?>> <br>
Duree:<input type="text" name="duree"  value=<?php echo $resultat["duree"] ;?>>
<input type="submit" value="modifier">
</form>
</body>
</html>