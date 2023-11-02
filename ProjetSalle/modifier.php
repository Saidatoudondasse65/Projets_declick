<?php
include "connexion.php";

if(isset($_POST["id"])&& isset($_POST["nom"])&& isset($_POST["capacite"]) && isset($_POST["equipement"]) && 
isset($_POST["date"])&& isset($_POST["duree"]))

{
    $id=$_POST["id"];
    $nom=$_POST["nom"];
    $capacite=$_POST["capacite"];
    $equipement=$_POST["equipement"];
    $date=$_POST["date"];
    $duree=$_POST["duree"];

    $requette = mysqli_query($conn,"UPDATE sales SET nom='$nom',capacite=' $capacite', equipement=' $equipement',
   date='$date',duree=' $duree' WHERE idsale='$id'");
    if($requette)
    {
        header("location:liste.php");
    }else{
        echo"Modification non reussie";
    }


}