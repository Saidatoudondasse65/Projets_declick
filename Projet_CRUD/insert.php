<?php
include "connexion.php";

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["genre"]))
{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $genre = $_POST["genre"];

    $requete = "INSERT INTO developpeurs (Nom, Prenom, Tel, Email, Genre)
                VALUES ('$nom', '$prenom', '$tel', '$email', '$genre')";

    if(mysqli_query($connexion, $requete))
    {
        header("Location:recuperation.php");
    }
    else
    {
        echo "Erreur d'insertion : ";
    }
}