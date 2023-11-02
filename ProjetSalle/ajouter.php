<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Inscription</title>
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
if(isset($_POST['nom']) && isset($_POST['capacite']) && isset($_POST['equipement']) 
 && isset($_POST['date']) && isset($_POST['duree']))
{
    $nom = $_POST['nom'];
    $capacite = $_POST['capacite'];
    $equipement = $_POST['equipement'];
    $date = $_POST['date'];
    $duree = $_POST['duree'];

    $requete = "INSERT INTO sales(nom, capacite, equipement, date, duree) VALUES (?, ?, ?, ?, ?)";

    $statement = mysqli_prepare($conn, $requete);
    mysqli_stmt_bind_param($statement, "sssss", $nom, $capacite, $equipement, $date, $duree);

    if (mysqli_stmt_execute($statement))
    {
        header("Location: liste.php");
        exit();
    }
    else
    {
        echo "Erreur d'insertion : " . mysqli_error($conn);
    }
}
?>
<form action="" method="POST">
<h1 class="box-title">Connexion</h1>
NOM:<input type="text" name="nom"> <br> <br>
CAPACITE:<input type="text" name="capacite"> <br> <br>
EQUIPEMENT:<input type="text" name="equipement" > <br> <br>
DATE:<input type="date" name="date" > <br> <br>
DUREE:<input type="text" name="duree"> <br> <br>
<input type="submit" name="valider" value="valider">
</form>
</body>
</html>