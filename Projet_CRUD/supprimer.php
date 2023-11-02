<?php
include "connexion.php";
if(isset($_POST["id"]))
{
    $id=$_POST["id"];
    $requette = mysqli_query($connexion,"DELETE FROM developpeurs WHERE id='$id'");
    if($requette)
    {
        header("location:recuperation.php ");
    }
else{
    echo "Echec de suppression";
}
}
