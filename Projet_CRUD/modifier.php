<?php
include "connexion.php";

if(isset($_POST["id"])&& isset($_POST["nom"])&& isset($_POST["prenom"]) && isset($_POST["tel"]) && 
isset($_POST["mail"])&& isset($_POST["sexe"]))

{
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $tel=$_POST["tel"];
    $email=$_POST["mail"];
    $genre=$_POST["sexe"];

    $requette = mysqli_query($connexion,"UPDATE developpeurs SET Nom='$nom',Prenom='$prenom', Tel='$tel',
    Email='$email',Genre='$genre' WHERE id='$id'");
    if($requette)
    {
        header("location:recuperation.php");
    }else{
        echo"Modification non reussie";
    }


}